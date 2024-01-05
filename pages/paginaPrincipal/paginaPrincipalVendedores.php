<?php 


session_start();

if($_SESSION["idUsuario"] != ""){





?>

<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Cards Gamifications- UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

   <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="index.html" class="app-brand-link gap-2">
                <!--<img src="../../assets/img/logo/logo.png" alt="" style="width: 70px;">-->
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
            

                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                  <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                    <i class="bx bx-sm"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->

               

                <!-- Notification 
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                  >
                    <i class="bx bx-bell bx-sm"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">0</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="bx bx-error"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1">CPU is running high</h6>
                              <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top">
                      <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                        View all notifications
                      </a>
                    </li>
                  </ul>
                </li>-->
                <!--/ Notification -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/logo/logo.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/logo/logo.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $_SESSION["nombreUsuario"]; echo " " ;echo $_SESSION["apellidoUsuario"]; ?></span>
                            <small class="text-muted">Vendedor</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../login/salir.php" target="">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Salir</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
              <div class="container-xxl d-flex h-100">
                <ul class="menu-inner">
                  <!-- Dashboards -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class='menu-icon tf-icons bx bx-user'></i>
                      <div data-i18n="Clientes">Clientes</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="dashboards-analytics.html" class="menu-link">
                          <i class='menu-icon tf-icons bx bx-user'></i>
                          <div data-i18n="Agregar clientes">Agregar clientes</div>
                        </a>
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              

              <div class="row">
                <div class="col-md-12 col-lg-12 mb-4 order-lg-1 order-2">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Agregar cliente</h5>
                    </div>
                    <div class="card-body">
                      <form id="Form-guardarCliente" method="POST">
                        <div class="row">

                       
                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-fullname">Nombre</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input name="clienteNombre" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Ejemplo: Damian" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                          </div>
                        </div>
                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-company">Apellido</label>
                          <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input name="clienteApellido" type="text" id="basic-icon-default-company" class="form-control" placeholder="Ejemplo: Gonzalez" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                          </div>
                        </div>
                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-email">Razón social</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-id-card'></i></span>
                            <input name="clienteRazonSocial" type="text" id="basic-icon-default-email" class="form-control" placeholder="Ejemplo: Milka" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          </div>
                        </div>
                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-email">Cuit</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-id-card'></i></span>
                            <input name="clienteCuit" type="number" id="basic-icon-default-email" class="form-control" placeholder="Ejemplo: 2046354131" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          </div>
                        </div>
                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-email">Departamento</label>
                          <select id="department" name="clienteDepartamento" class="select2 form-select" data-allow-clear="true">
                                <?php 
                                include '../../db/conexion.php';
                                    $buscarDepartamento = $pdo->prepare("SELECT * FROM departamento ORDER BY descripcion ASC");
                                    $buscarDepartamento->execute();
                                    foreach($buscarDepartamento as $b){
                                        echo '<option value="'.$b['Id_departamento'].'">'.$b['descripcion'].'</option>';
                                    }
                                    ?>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="locality">Localidad</label>
                              <select id="locality" name="clienteLocalidad" class="select2 form-select" data-allow-clear="true">
                                  <option value="">Selecciona un departamento primero</option>
                              </select>
                        </div>

                        <div class="mb-3 col-lg-4">
                          <label class="form-label" for="basic-icon-default-email">Barrio</label>
                          <select class="form-select" name="clienteBarrio" aria-label="">
                                <option disabled>Barrio</option>
                                <?php
                                  

                                  $buscarBarrio = $pdo->prepare("SELECT DISTINCT Barrios_Nombre, Id_Barrios FROM barrio ORDER BY Barrios_Nombre ASC");
                                  $buscarBarrio->execute();

                                  foreach ($buscarBarrio as $b) {
                                      echo '<option value="', $b['Id_Barrios'], '">', $b['Barrios_Nombre'], '</option>';
                                  }
                                  ?>

                          </select>
                        </div>

                        <div class="mb-3 col-lg-2">
                          <label class="form-label" for="basic-icon-default-email">Calle</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-directions'></i></span>
                            <input name="clienteCalle" type="text" id="basic-icon-default-email" class="form-control" placeholder="Ejemplo: Av. Gendarmería Nacional" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          </div>
                        </div>

                        <div class="mb-3 col-lg-2">
                          <label class="form-label" for="basic-icon-default-email">Altura</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class='bx bx-directions'></i></span>
                            <input name="clienteAltura" type="text" id="basic-icon-default-email" class="form-control" placeholder="Ejemplo: 1284" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          </div>
                        </div>

                        <div class="mb-3 col-lg-2">
                          <label class="form-label" for="basic-icon-default-email">Código postal</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input name="clienteCodPostal" type="text" id="basic-icon-default-email" class="form-control" placeholder="Ejemplo: 3600" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          </div>
                        </div>

                        <div class="mb-3 col-lg-2">
                          <label class="form-label" for="basic-icon-default-email">Zona</label>
                          <select id="department" name="clienteZona" class="select2 form-select" data-allow-clear="true" >
                                <?php 
                                    $buscarZona = $pdo->prepare("SELECT * FROM zona ORDER BY zona_nombre ASC");
                                    $buscarZona->execute();
                                    foreach($buscarZona as $b){
                                        echo '<option value="'.$b['Id_zona'].'">'.$b['zona_nombre'].'</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                    
                        <div class="col-lg-5">
                            <button id="btn-guardarCliente" type="button" class="btn btn-primary">Guardar</button>
                        </div>
                        
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                
                
                
            </div>
            <!--/ Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://themeselection.com/support/"
                    target="_blank"
                    class="footer-link d-none d-sm-inline-block"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->

    <script>
      $("#btn-guardarCliente").on('click', function() {
    
            var formData = new FormData($('#Form-guardarCliente')[0]);
            $.ajax({
                url: '../../php/clientes/cargarClientes.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(formData) {
                  
                  if (formData.success == 1) {
                    Swal.fire({
                      title: '¡Exito!',
                      text: 'El cliente ha sido cargado con exito',
                      icon: 'success',
                      customClass: {
                        confirmButton: 'btn btn-primary'
                      },
                      buttonsStyling: false 
                    });
                    
                    setTimeout(function () {
                      location.reload(); 
                    }, 2000);
                   
                    
                  }

                  if (formData.success == 2) {
                    Swal.fire({
                      title: '¡Error!',
                      text: 'Complete todos los campos',
                      icon: 'error',
                      customClass: {
                        confirmButton: 'btn btn-primary'
                      },
                      buttonsStyling: false
                    });
                  }

                  if (formData.success == 3) {
                    Swal.fire({
                      title: '¡Error!',
                      text: 'El cuit no ha sido encontrado en la base de datos por favor ingrese otro',
                      icon: 'error',
                      customClass: {
                        confirmButton: 'btn btn-primary'
                      },
                      buttonsStyling: false
                    });
                  }

                }
            });
            return false;
        });
    </script>

<script>
        // Obtén los elementos select del departamento y la localidad
        var departmentSelect = document.getElementById("department");
        var localitySelect = document.getElementById("locality");
        
        // Agrega un evento change al select del departamento
        departmentSelect.addEventListener("change", function() {
            // Obtén el valor seleccionado del departamento
            var selectedDepartmentId = departmentSelect.value;
            
            // Realiza una consulta AJAX para obtener las localidades relacionadas con el departamento
            var url = "../../php/clientes/consultarLocalidad.php?id_departamento=" + selectedDepartmentId;
            
            // Realiza la solicitud AJAX
            fetch(url)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Limpia el select de localidad
                    localitySelect.innerHTML = '<option value="">Selecciona una localidad</option>';
                    
                    // Llena el select de localidad con los datos recibidos
                    data.forEach(function(locality) {
                        var optionElement = document.createElement("option");
                        optionElement.value = locality.Id_pueblo; // Asegúrate de ajustar el nombre de la columna según tu base de datos
                        optionElement.textContent = locality.descripcion; // Ajusta el nombre de la columna según tu base de datos
                        localitySelect.appendChild(optionElement);
                    });
                })
                .catch(function(error) {
                    console.log("Error en la solicitud AJAX: " + error);
                });
        });

    </script>


  </body>
</html>

<?php 

} else {


  // Redirigir a la página "nueva_pagina.php"
header("Location: ../../index.html");
exit(); // Asegúrate de salir después de enviar la cabecera de redirección


}

?>