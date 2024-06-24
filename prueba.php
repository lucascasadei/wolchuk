<?php

function getTA($cert, $privateKey, $passphrase) {
    $wsaaURL = "https://wsaahomo.afip.gov.ar/ws/services/LoginCms?wsdl";
    $TRA = new SimpleXMLElement('<loginTicketRequest version="1.0"></loginTicketRequest>');
    $TRA->addChild('header');
    $TRA->header->addChild('uniqueId', date('U'));
    $TRA->header->addChild('generationTime', date('c', date('U') - 60));
    $TRA->header->addChild('expirationTime', date('c', date('U') + 60));
    $TRA->addChild('service', 'wsfe');

    $TRA->asXML('TRA.xml');

    // Verificar si el archivo de clave privada y el certificado existen
    if (!file_exists($cert) || !file_exists($privateKey)) {
        throw new Exception("Certificado o clave privada no encontrados.");
    }

    $status = openssl_pkcs7_sign(
        "TRA.xml", 
        "TRA.tmp", 
        "file://$cert",
        ["file://$privateKey", $passphrase],
        [],
        !PKCS7_DETACHED
    );

    if (!$status) {
        throw new Exception("Error al firmar el TRA: " . openssl_error_string());
    }

    // Verificar si el archivo temporal fue creado
    if (!file_exists("TRA.tmp")) {
        throw new Exception("Error al crear el archivo temporal TRA.tmp.");
    }

    $inf = fopen("TRA.tmp", "r");
    if (!$inf) {
        throw new Exception("Error al abrir el archivo temporal TRA.tmp.");
    }

    $cms = "";
    $i = 0;
    while (!feof($inf)) {
        $buffer = fgets($inf);
        if ($i++ >= 4) {
            $cms .= $buffer;
        }
    }
    fclose($inf);

    $client = new SoapClient($wsaaURL, ['soap_version' => SOAP_1_2, 'location' => $wsaaURL, 'trace' => 1, 'exceptions' => 0]);
    $results = $client->loginCms(['in0' => $cms]);
    
    if (is_soap_fault($results)) {
        throw new Exception("SOAP Fault: " . $results->faultcode . "-" . $results->faultstring);
    }

    file_put_contents("TA.xml", $results->loginCmsReturn);
    return new SimpleXMLElement($results->loginCmsReturn);
}

$cert = "certificado.crt";
$privateKey = "clave_privada.key";
$passphrase = "tu_passphrase";

try {
    $ta = getTA($cert, $privateKey, $passphrase);
    echo $ta->asXML();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
