@extends('layout')

@section('title','Pedidos')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-sm-9">
            <article class="card">
                <div class="card-body mb-3">
                    <h5 class="card-title">Tu información</h5>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Type here">
                        </div> <!-- col end.// -->
                        <div class="col-6">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" placeholder="Type here">
                        </div> <!-- col end.// -->
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="text" value="+998" class="form-control" placeholder="">
                        </div> <!-- col end.// -->
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" placeholder="example@gmail.com">
                        </div> <!-- col end.// -->
                    </div> <!-- row.// -->
                    <hr class="my-4">
                    <h5 class="card-title">Datos de envío </h5>
                    <div class="row mb-3">
                        <div class="col-lg-4 mb-3">
                            <div class="box box-check">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="dostavka" checked="">
                                    <b class="border-oncheck"></b>
                                    <span class="form-check-label"> Express delivery <br>
                                        <small class="text-muted">3-4 days via Fedex </small>
                                    </span>
                                </label>
                            </div>
                        </div> <!-- col end.// -->
                        <div class="col-lg-4 mb-3">
                            <div class="box box-check">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="dostavka">
                                    <b class="border-oncheck"></b>
                                    <span class="form-check-label"> Post office <br>
                                        <small class="text-muted">20-30 days via post</small>
                                    </span>
                                </label>
                            </div>
                        </div> <!-- col end.// -->
                        <div class="col-lg-4 mb-3">
                            <div class="box box-check">
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="dostavka">
                                    <b class="border-oncheck"></b>
                                    <span class="form-check-label"> Self pick-up <br> 
                                        <small class="text-muted"> Come to our shop </small> 
                                    </span> 
                                </label>
                            </div>
                        </div> <!-- col end.// -->
                    </div> <!-- row end.// -->
                    <div class="row">
                        <div class="col-sm-8 mb-3"> <label class="form-label">Address</label> 
                            <input type="text" class="form-control" placeholder="Type here"> 
                        </div> <!-- col end.// -->
                        <div class="col-sm-4 mb-3"> 
                            <label class="form-label">City*</label> 
                            <select class="form-select" id="city*" aria-label="City*">
                                <option value="1">New York</option>
                                <option value="2">Moscow</option>
                                <option value="3">Samarqand</option>
                            </select> 
                        </div> <!-- col end.// -->
                        <div class="col-sm-4 col-6 mb-3"> 
                            <label class="form-label">House</label> 
                            <input type="text" class="form-control" placeholder="Type here"> 
                        </div> <!-- col end.// -->
                        <div class="col-sm-4 col-6 mb-3"> 
                            <label class="form-label">Postal code</label> 
                            <input type="text" class="form-control" placeholder=""> 
                        </div> <!-- col end.// -->
                        <div class="col-sm-4 col-6 mb-3"> 
                            <label class="form-label">Zip</label> 
                            <input type="text" class="form-control" placeholder=""> 
                        </div> <!-- col end.// -->
                    </div> <!-- row.// --> 
                    <button class="btn btn-primary">Confirmar</button> <button class="btn btn-light">Cambiar</button>
                </div>
                <div class="card-body mb-3"> 
                    <hr class="my-4">
                    <h5 class="card-title">Tus productos </h5>
                    <div class="row gy-3 align-items-center"> 
                        <div class="col-md-6"> 
                            <a href="#" class="itemside align-items-center"> 
                                <div class="aside"> 
                                    <img src="/img/10.jpg" height="72" width="72" class="img-thumbnail img-sm"> 
                                </div> 
                                <div class="info"> 
                                    <p class="title">T-shirts with multiple colors, for men and lady </p> 
                                    <span class="text-muted">Clothes</span> 
                                </div> 
                            </a> 
                        </div> <!-- col.// --> 
                        <div class="col-auto"> 
                            <div class="input-group input-spinner"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13H5v-2h14v2z"></path> 
                                    </svg> 
                                </button> 
                                <input type="text" class="form-control" value="1"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path> 
                                    </svg> 
                                </button> 
                            </div> <!-- input-group.// --> 
                        </div> <!-- col.// --> 
                        <div class="col"> 
                            <strong class="price"> $180.00 </strong> 
                        </div> 
                        <div class="col text-end"> 
                            <a href="#" class="btn btn-icon btn-outline-danger"> 
                                <i class="fa fa-trash"></i> 
                            </a> 
                        </div> 
                    </div> 
                </div> 
                <div class="card-body mb-3"> 
                    <div class="row gy-3 align-items-center"> 
                        <div class="col-md-6"> 
                            <a href="#" class="itemside align-items-center"> 
                                <div class="aside"> 
                                    <img src="/img/12.jpg" height="72" width="72" class="img-thumbnail img-sm"> 
                                </div> 
                                <div class="info"> 
                                    <p class="title"> Backpack jeans for travel for men and lady </p> 
                                    <span class="text-muted"> Accessories </span> 
                                </div> 
                            </a> 
                        </div> <!-- col.// --> 
                        <div class="col-auto"> 
                            <div class="input-group input-spinner"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13H5v-2h14v2z"></path> 
                                    </svg> 
                                </button> 
                                <input type="text" class="form-control" value="1"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path> 
                                    </svg> 
                                </button> 
                            </div> <!-- input-group.// --> 
                        </div> <!-- col.// --> 
                        <div class="col"> 
                            <strong class="price"> $180.00 </strong> 
                        </div> 
                        <div class="col text-end"> 
                            <a href="#" class="btn btn-icon btn-outline-danger"> 
                                <i class="fa fa-trash"></i> 
                            </a> 
                        </div> 
                    </div> 
                </div> 
                <div class="card-body mb-3"> 
                    <div class="row gy-3 align-items-center"> 
                        <div class="col-md-6"> 
                            <a href="#" class="itemside align-items-center"> 
                                <div class="aside"> 
                                    <img src="/img/8.jpg" height="72" width="72" class="img-thumbnail img-sm"> 
                                </div> 
                                <div class="info"> 
                                    <p class="title">Jeans bag for hiking blue color </p> 
                                    <span class="text-muted">Wears</span> 
                                </div> 
                            </a> 
                        </div> <!-- col.// --> 
                        <div class="col-auto"> 
                            <div class="input-group input-spinner"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13H5v-2h14v2z"></path> 
                                    </svg> 
                                </button> 
                                <input type="text" class="form-control" value="2"> 
                                <button class="btn btn-sm btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path> 
                                    </svg> 
                                </button> 
                            </div> <!-- input-group.// --> 
                        </div> <!-- col.// --> 
                        <div class="col"> 
                            <strong class="price"> $180.00 </strong> 
                        </div> 
                        <div class="col text-end"> 
                            <a href="#" class="btn btn-icon btn-outline-danger"> 
                                <i class="fa fa-trash"></i> 
                            </a> 
                        </div> 
                    </div> <!-- row.// --> 
                </div> 
                <div class="card-body mb-3">
                    <hr class="my-4">
                    <h5 class="card-title">Método de pago</h5>
                    <div class="accordion" id="accordion_payment">
                        <article class="accordion-item">
                            <h2 class="accordion-header" id="headingOne"> 
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    Transferencia bancaria
                                </button> 
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_payment">
                                <div class="accordion-body">
                                    <p> <strong>BANCO:</strong> BBVA, <strong>NÚMERO DE CUENTA:</strong> 12345678912346 <br> <strong>REFERENCIA:</strong> 12345, <strong>CONCEPTO:</strong> Pedido en línea</p>
                                </div>
                            </div>
                        </article> <!-- accardion-item end.// -->
                        <article class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo"> 
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
                                    Paypal
                                </button> 
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_payment">
                                <div class="accordion-body">
                                    <p class="text-center text-muted"> 
                                        Conecta tu cuenta de PayPal y utilízala para pagar tus facturas.
                                        <br> Será redirigido a PayPal para agregar su información de facturación. <br><br> 
                                        <a href="#"> 
                                            <img src="/img/btn-paypal.png" height="32">
                                        </a> 
                                    </p>
                                </div>
                            </div>
                        </article> <!-- accardion-item end.// -->
                    </div> <!-- accardion-item end.// -->
                </div> <!-- card-body end.// -->
            </article> 
        </div>
        <aside class="col-sm-3 navbar sticky-top"> 
            <div class="card h-100"> 
                <div class="card-body"> 
                    <dl class="dlist-align"> 
                        <dt>Subtotal:</dt> <dd class="text-end"> $1403.97</dd> 
                    </dl> 
                    <dl class="dlist-align"> 
                        <dt>Descuento:</dt> <dd class="text-end text-success"> - $60.00 </dd> 
                    </dl> 
                    <dl class="dlist-align"> 
                        <dt>Impuestos:</dt> <dd class="text-end text-danger"> + $14.00 </dd> 
                    </dl> 
                    <dl class="dlist-align"> 
                        <dt>Total:</dt> <dd class="text-end text-dark h4 fw-bold"> $1357.97 </dd> 
                    </dl> 
                    <hr> 
                    <a href="{{ route('products.store') }}" class="btn btn-primary mb-2 w-100">Hacer pedido</a> 
                    <p class="text-center mt-3"> 
                        <img src="/img/payments.png" height="24"> 
                    </p> 
                </div> <!-- card-body.// --> 
            </div> <!-- card.// --> 
        </aside>
    </div>
</div>

@endsection