
<?php

session_start();

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

    <title>Sistema | Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

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
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu ">
      <div class="layout-container">
          
              <!-- Form Alignment -->
              <div class="card mx-auto" style="margin-top: 100px !important;">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <form class="w-px-400 border rounded p-3 p-md-5" id="Form-CrearContrasena" method="POST">
                      <h4 class="mb-4">Bienvenido/a <?php echo $_SESSION["nombreUsuario"].",".$_SESSION["apellidoUsuario"]; ?></h4>
                      <h6>Ingresa tu nueva contraseña</h6>

                      <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="form-alignment-password">Contraseña</label>
                        <div class="input-group input-group-merge">
                          <input
                            name="contrasena"
                            type="password"
                            id="form-alignment-password"
                            class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="form-alignment-password2"
                          />
                          <span class="input-group-text cursor-pointer" id="form-alignment-password2"
                            ><i class="bx bx-hide"></i
                          ></span>
                        </div>
                      </div>
                      <div class="mb-3 form-password-toggle" style="display:none;">
                        <label class="form-label" for="form-alignment-password">dni</label>
                        <div class="input-group input-group-merge">
                          <input type="text" name="dni" value="<?php echo $_SESSION["dniUsuario"]; ?>">
                        </div>
                      </div>
                      <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="form-alignment-password">Repetir Contraseña</label>
                        <div class="input-group input-group-merge">
                          <input
                            name="Repetircontrasena"
                            type="password"
                            id="form-alignment-password"
                            class="form-control"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="form-alignment-password2"
                          />
                          <span class="input-group-text cursor-pointer" id="form-alignment-password2"
                            ><i class="bx bx-hide"></i
                          ></span>
                        </div>
                      </div>
                      <div class="d-grid gap-2">
                        <button id="btn-CrearContrasena" type="button" class="btn btn-primary">Activar Cuenta</button>
                        <a class="mx-auto" href="pages/Login/activarCuenta.php">Iniciar Sesión</a>
                      </div>
                      <br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
   

  

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

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="../../assets/js/extended-ui-sweetalert2.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>

    <script>
      $("#btn-CrearContrasena").on('click', function() {
    
            var formData = new FormData($('#Form-CrearContrasena')[0]);
            $.ajax({
                url: '../../php/login/crearContrasena.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(formData) {
                  
                  if (formData.success == 1) {
                    Swal.fire({
                      title: '¡Exito!',
                      text: 'Contraseña creada',
                      icon: 'success',
                      customClass: {
                        confirmButton: 'btn btn-primary'
                      },
                      buttonsStyling: false 
                    });
                    
                    setTimeout(function () {
                      window.location.assign("../paginaPrincipal/paginaPrincipalVendedores.php"); 
                    }, 2000);
                   
                    
                  }


                  if (formData.success == 2) {
                    Swal.fire({
                      title: '¡Error!',
                      text: 'Una de las contraseñas esta vacia',
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
                      text: 'Las contraseñas no son iguales',
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




  </body>
</html>
