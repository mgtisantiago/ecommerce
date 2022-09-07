@extends('layout')

@section('title',"Perfil")

@section('content')

<div class="fondo-encabezados py-2 mb-4">
    <div class="container">
      <div class="">
        <h1 class="fs-3 my-4">Perfil del cliente</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="list-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button type="button" class="list-group-item list-group-item-action active" aria-current="true" id="v-pills-direccion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-direccion" role="tab" aria-controls="v-pills-direccion" aria-selected="true">Mi dirección</button>
          <button type="button" class="list-group-item list-group-item-action" id="v-pills-configuracion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-configuracion" role="tab" aria-controls="v-pills-seguridad" aria-selected="false">Configuración</button>
          <button type="button" class="list-group-item list-group-item-action" id="v-pills-pagos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pagos" type="button" role="tab" aria-controls="v-pills-pagos" aria-selected="false">Formas de pago</button>
          <button type="button" class="list-group-item list-group-item-action" id="v-pills-cuenta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cuenta" type="button" role="tab" aria-controls="v-pills-cuenta" aria-selected="false">Cuenta</button>
        </div>
      </div>
      <div class="col-lg-9">
        <div id="messages"></div>
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-direccion" role="tabpanel" aria-labelledby="v-pills-direccion-tab">
               
                 <form class="row g-3" id="formPerfil" method="post" action="cliente/actualizar.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="inputIdClientes" name="aCliente[idclientes]" value="">
                    <input type="hidden" class="form-control" id="inputEstatus" name="aCliente[estatus]" value="">
                    <input type="hidden" class="form-control" id="inputIdUsuarios" name="aCliente[usuarios_idusuarios]" value="">
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="inputAddress" name="aCliente[direccion]" value="">
                    </div>
                    <div class="col-12">
                      <label for="inpuColonia" class="form-label">Colonia</label>
                      <input type="text" class="form-control" id="inputColonia" name="aCliente[colonia]" value="">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Ciudad</label>
                      <input type="text" class="form-control" id="inputCity" name="aCliente[ciudad]" value="">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Estado</label>
                      <select id="inputState" name="aCliente[estado]" class="form-select">
                        <option selected>Selecciona</option>
                        <option>Yucatan</option>
                        <option>Campeche</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Código Postal</label>
                      <input type="text" class="form-control" id="inputZip" name="aCliente[cp]" value="">
                    </div>
                    <div class="col-12">
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Guadar</button>
                      </div>
                    </div>
                  </form> 
                
                
              
                  <form class="row g-3" id="formPerfil" method="post" action="cliente/crear.php" enctype="multipart/form-data">
                   
                      <input type="hidden" class="form-control" id="inputIdUsuarios" name="aCliente[usuarios_idusuarios]" value="">
                   
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="inputAddress" name="aCliente[direccion]">
                    </div>
                    <div class="col-12">
                      <label for="inpuColonia" class="form-label">Colonia</label>
                      <input type="text" class="form-control" id="inputColonia" name="aCliente[colonia]">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Ciudad</label>
                      <input type="text" class="form-control" id="inputCity" name="aCliente[ciudad]">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Estado</label>
                      <select id="inputState" name="aCliente[estado]" class="form-select">
                        <option selected>Selecciona</option>
                        <option>Yucatan</option>
                        <option>Campeche</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Código Postal</label>
                      <input type="text" class="form-control" id="inputZip" name="aCliente[cp]">
                    </div>
                    <div class="col-12">
                      <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Guadar</button>
                      </div>
                    </div>
                  </form>
               
              </div>
              <div class="tab-pane fade" id="v-pills-configuracion" role="tabpanel" aria-labelledby="v-pills-configuracion-tab">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo elctrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"><i class="fas fa-info-circle me-1"></i> Nunca compartiremos su correo electrónico con nadie más.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cambiar Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Guadar</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="v-pills-cuenta" role="tabpanel" aria-labelledby="v-pills-cuenta-tab">
                <h3 class="fs-4">Cuidado</h3>
                <p>Este apartado es para poder eliminar tu cuenta.</p>
                <button class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarCliente">Eliminar</button>
                <!-- Modal -->
                <div class="modal fade" id="eliminarCliente" tabindex="-1" aria-labelledby="EliminarClienteMensaje" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="EliminarClienteMensaje">Cuidado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    
                         <form class="row g-3" id="formEliminar" method="post" action="cliente/actualizar.php" enctype="multipart/form-data">
                          <input type="hidden" class="form-control" id="inputIdClientes" name="aCliente[idclientes]" value="">
                          <input type="hidden" class="form-control" id="inputAddress" name="aCliente[direccion]" value="">
                          <input type="hidden" class="form-control" id="inputColonia" name="aCliente[colonia]" value="">
                          <input type="hidden" class="form-control" id="inputCity" name="aCliente[ciudad]" value="">
                          <input type="hidden" class="form-control" id="inputZip" name="aCliente[cp]" value="">
                          <input type="hidden" class="form-control" id="inputEstatus" name="aCliente[estatus]" value="0">
                          <input type="hidden" class="form-control" id="inputIdUsuarios" name="aCliente[usuarios_idusuarios]" value="">
                       
                            <div class="modal-body">
                            <p>¿Esta seguro/a de eliminar su cuenta?</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                            </div>
                        </form> 
                    </div>
                  </div>
                </div>

              </div>
              <div class="tab-pane fade" id="v-pills-pagos" role="tabpanel" aria-labelledby="v-pills-pagos-tab">



                <form role="form" class="w-75 d-block justify-content-center py-4 mx-0">
                  <div class="mb-3">
                    <label for="username" class="form-label">Nombre del propietario de la tarjeta</label>
                    <input type="text" class="form-control" name="username" placeholder="Ejemplo: Juan Pérez" required="">
                  </div> <!-- form-group.// -->

                  <div class="mb-3">
                    <label for="cardNumber" class="form-label" >Número de tarjeta</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="cardNumber" placeholder="Ejemplo: 4312 4556 5678 8871">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
                          <i class="fab fa-cc-mastercard"></i>
                        </span>
                      </div>
                    </div> <!-- input-group.// -->
                  </div> <!-- form-group.// -->
                  <div class="row g-3 mb-3">
                    <div class="col-md-3">
                        <label class="form-label"><span class="hidden-xs">Caducidad</span> </label>
                        <select class="form-control">
                            <option>Seleccione el mes</option>
                            <option>Enero</option>
                            <option>Febrero</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                          </select>
                         
                      </div>
                      <div class="col-md-3">
                      <label class="form-label"><span class="hidden-xs">/</span> </label>
                        <input type="number" class="form-control" name="anio" placeholder="Ejemplo: 2021">
                      </div>
                   
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label" data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                        <input class="form-control" required="" type="text" placeholder="Ejemplo: 657">
                      </div> <!-- form-group.// -->
                    </div>
                  </div> <!-- row.// -->


                  <div class="d-grid gap-2">
                    <button class="subscribe btn btn-primary btn-block" type="button"> Guardar </button>
                  </div>
                
                
                </form>





              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection