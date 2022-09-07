@extends('layout')

@section('title','Clientes')

@section('content')

<div class="container my-4">
    <div class="row">
        <aside class="col-sm-3">
            <div class="card p-3 h-100">
                <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                    <a class="nav-link active" href="{{ route('clients.show', auth()->user()->id) }}">Mi perfil</a>  
                    <a class="nav-link" href="{{ route('directions.show', $user->clientes->id ?? '') }}">Mi cuenta</a> 
                    <a class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false" href="#v-pills-orders">Mis pedidos</a> 
                </nav>
            </div> 
        </aside>
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <article class="card">
                        <div class="card-body">
                            @if (session('saveOK'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Éxito!</strong> {{ session('saveOK') }} 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if($user->clientes->id ?? '')
                                <form method="POST" action="{{ route('clients.update',$user->clientes->id) }}">
                                @method('PATCH')
                            @else
                                <form method="POST" action="{{ route('clients.store') }}">
                            @endif
                            
                            @csrf
                                <div class="row gx-3">
                                    <input type="hidden" class="form-control" name="id_user" value="{{ $user->id }}" > 
                                    <div class="col-12 mb-3"> 
                                        <label class="form-label">Nombres</label> 
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name" value="{{ old('name', $user->clientes->name ?? '') }}" > 
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                    <div class="col-12 mb-3"> 
                                        <label class="form-label">Apellidos</label> 
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname', $user->clientes->lastname ?? '') }}" > 
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                    <div  class="col-12 mb-3">
                                        <label class="form-label">Correo electrónico</label> 
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" > 
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-3"> 
                                        <label class="form-label">Teléfono</label> 
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"  value="{{ old('phone', $user->clientes->phone ?? '')  }}"> 
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-6 mb-3"> 
                                        <label class="form-label">Cumpleaños</label> 
                                        <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" name="dateofbirth" value="{{ old('dateofbirth', $user->clientes->dateofbirth ?? '')  }}"> 
                                        @error('dateofbirth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                </div>
                                <br> 
                                <button type="submit" class="btn btn-warning btn-lg">Guardar cambios</button>
                            </form>
                            <hr class="my-4">
                            <div class="row" style="max-width:920px">
                                <div class="col-md">
                                    <article class="box mb-3 bg-light"> 
                                        <a class="btn float-end btn-outline-primary btn-sm" href="#">Cambiar</a>
                                        <p class="title mb-0">Contraseña</p> 
                                        <small class="text-muted d-block" style="width:70%">
                                            Puede cambiar su contraseña haciendo clic o presionar aquí
                                        </small>
                                    </article>
                                </div> <!-- col.// -->
                                <div class="col-md">
                                    <article class="box mb-3 bg-light"> 
                                        <a class="btn float-end btn-outline-danger btn-sm" href="#">Desactivar</a>
                                        <p class="title mb-0">Desactivar cuenta</p> 
                                        <small class="text-muted d-block" style="width:70%">
                                            Tu cuenta la desactivas, pero no te preocuopes no se elimina.
                                        </small>
                                    </article>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                        </div> <!-- card-body .// -->
                    </article>
                </div>
                <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <article class="card">
                        <div class="card-body">
                            <header class="d-md-flex">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> Número de orden: 1032 <i class="dot"></i><span class="fw-bold text-danger"> Pediente </span> </h6>
                                    <span>Fecha: 25 de febrero 2022</span>
                                </div>
                                <div> 
                                    <a href="#" class="btn btn-sm btn-outline-danger">Cancelar orden</a> 
                                </div>
                            </header>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mb-0 text-muted">Contacto</p>
                                    <p class="m-0"> 
                                        Alex Donald <br> Teléfono: 109-295-9131 <br> Correo: info@mywebsite.com 
                                    </p>
                                </div> 
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Dirección de envío</p>
                                    <p class="m-0"> 
                                        United States <br> 600 Markley Street, Suite 170777 Port Reading, NJ 07064 
                                    </p>
                                </div> 
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Pago</p>
                                    <p class="m-0"> 
                                        <span class="text-success"> Visa **** 0932 </span> <br> Tarifa de envío: $12 <br> Total: $150.90 
                                    </p>
                                </div> 
                            </div> 
                            <hr>
                            <ul class="row">
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img  src="/img/6.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Apple SmartWatch Series 4 Space Gray</p> 
                                            <p class="text-muted"> 2x = $137.00 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/7.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Gaming Headset with mic</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/8.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Backpack for hiking</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- card-body .// -->
                        <hr>
                        <div class="card-body">
                            <header class="d-md-flex">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> Número de orden: 1031 <i class="dot"></i><span class="fw-bold text-success"> Enviado </span> </h6>
                                    <span>Fecha: 25 de febrero 2022</span>
                                </div>
                            </header>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mb-0 text-muted">Contacto</p>
                                    <p class="m-0"> 
                                        Alex Donald <br> Teléfono: 109-295-9131 <br> Correo: info@mywebsite.com 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Dirección de envío</p>
                                    <p class="m-0"> 
                                        United States <br> 600 Markley Street, Suite 170777 Port Reading, NJ 07064 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Pago</p>
                                    <p class="m-0"> 
                                        <span class="text-success"> Visa **** 0932 </span> <br> Tarifa de envío: $12 <br> Total: $150.90 
                                    </p>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <ul class="row">
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img  src="/img/9.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Jeans shorts for men - XL</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/12.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">T-shirts blue colors - SM</p> 
                                            <p class="text-muted"> 2x = $53.00 </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                    </article>
                </div>      
            </div>
        </div>
    </div>
</div>
           
@endsection        