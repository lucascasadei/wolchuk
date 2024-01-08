 <!-- Modal -->
 <div class="modal fade" id="modalCrearMeta" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Crear meta de venta</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body" id="modal-body-verMas">
                              <div class="card-body">
                                <form id="Form-guardadMeta" method="POST">
                                    <div class="row">

                                
                                        <div class="mb-3 col-lg-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Nombre del producto</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-package'></i></span>
                                            <input name="metaProducto" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Ejemplo: Yogurt de Frutilla" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                        </div>
                                        </div>

                                        <div class="mb-3 col-lg-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Cantidad de ventas esperada</label>
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class='bx bx-package'></i></span>
                                            <input name="metaCantidad" type="number" class="form-control" id="basic-icon-default-fullname" placeholder="Ejemplo: 20" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                                        </div>
                                        </div>
                                        
                                        
                            
                                        
                                        </div>
                                    </form>
                                </div>
                              </div>
                              <div class="modal-footer">
                              <button id="btn-guardarMeta" type="button" class="btn btn-primary">Guardar</button>

                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                  Cerrar
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>