 <!-- Modal -->
 <div class="modal fade" id="modalCargarVenta" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Cargar venta</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body" id="modal-body-verMas">
                              <div class="card-body">
                                <form id="Form-guardarCantidadVendida" method="POST">
                                    <div class="row">

                                
                                        <div class="mb-3 col-lg-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Meta</label>
                                        <div class="input-group input-group-merge">
                                        <select id="department" name="clienteZona" class="select2 form-select" data-allow-clear="true" >
                                            <?php 
                                            $fechaActual = date("Y-m-d"); // Formato: Año-Mes-Día
                                            echo "La fecha actual es: " . $fechaActual;
                                                $buscarZona = $pdo->prepare("SELECT * FROM metasequipoventas WHERE metasEquipoVentas_fechaCreacion='$fechaActual'");
                                                $buscarZona->execute();
                                                foreach($buscarZona as $b){
                                                    echo '<option value="'.$b['Id_metasEquipoVentas'].'">'.$b['metasEquipoVentas_nombreProducto'].'</option>';
                                                }
                                                ?>
                                        </select>
                                        </div>
                                        </div>

                                        <div class="mb-3 col-lg-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Vendedor</label>
                                        <div class="input-group input-group-merge">
                                        <select id="department" name="clienteZona" class="select2 form-select" data-allow-clear="true" >
                                        <?php 
                                            $buscarZona = $pdo->prepare("SELECT * FROM usuarios WHERE Id_usuarios != 1 and Id_usuarios != 3 ORDER BY usuarios_nombre asc");
                                            $buscarZona->execute();
                                                foreach($buscarZona as $b){
                                                    echo '<option value="'.$b['Id_usuarios'].'">'.$b['usuarios_nombre'].' '.$b['usuarios_apellido'].'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        </div>

                                        <div class="mb-3 col-lg-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Cantidad vendida</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-package"></i></span>
                                            <input name="metaCantidad" type="number" class="form-control" id="basic-icon-default-fullname" placeholder="Ejemplo: 20" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                        </div>
                                        </div>
                                        
                                        
                            
                                        
                                        </div>
                                    </form>
                                </div>
                              </div>
                              <div class="modal-footer">
                              <button id="btn-guardarCantidadVendida" type="button" class="btn btn-primary">Guardar</button>

                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                  Cerrar
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>