@extends('layout')

@section('title','Contacto')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-4 card-title">Contacto</h1>
                    <form method="POST" action="{{ route('messages.store') }}">
                        @csrf
                         <div class="mb-3">
                             <label for="nombre" class="form-label">Nombre</label>
                             <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                             {!! $errors->first('nombre', '
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>') !!}
                         </div>
                         
                         <div class="mb-3">
                             <label for="correo" class="form-label">Correo electrónico</label>
                             <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
                             {!! $errors->first('correo', '
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>') !!}
                         </div>
                         
                         <div class="mb-3">
                             <label for="asunto" class="form-label">¿De qué trata el mensaje?</label>
                             <input type="text" class="form-control" id="asunto" name="asunto" value="{{ old('asunto') }}">
                             {!! $errors->first('asunto', '
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>') !!}
                         </div>
             
                         <div class="mb-3">
                             <label for="mensaje" class="form-label">Mensaje</label>
                             <textarea class="form-control" id="mensaje" name="mensaje" id="" cols="5" rows="3">{{ old('mensaje') }}</textarea>
                             {!! $errors->first('mensaje', '
                             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>') !!}
                         </div>
                         
                         <div class="d-grid gap-2">
                             <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                         </div>
                     </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card"> 
                <article class="p-4 p-xl-5 text-center"> 
                    <img src="img/avatar1.jpg" class="img-avatar img-md"> 
                    <h5 class="card-title mt-3 fw-bold">Servicio al Cliente</h5> 
                    <p>Llama (999) 123 5051 <br> soporte@despensadigital.com.mx </p> 
                    <a href="#" class="btn btn-warning"> Iniciar Chat </a> 
                    <a href="#" class="btn btn-success"> Hacer Llamar </a> 
                </article> 
            </div>
            <div class="d-flex justify-content-center  flex-column">
                <div class="card flex-fill my-2"> 
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                            <span class="rounded-circle icon-xs bg-primary text-light" > <i class="fas fa-star"></i> </span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fw-bold">Calidad en el servicio</h6>
                                <small>Atención personalizada y profesional</small>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card flex-fill my-2"> 
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                            <span class="rounded-circle icon-xs bg-primary text-light"> <i class="fas fa-bolt"></i> </span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fw-bold">Rapidez</h6>
                                <small>Enfocados a cumplir en tiempo y forma</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

    <article class="card p-4 bg-primary my-4"> 
        <div class="row align-items-center"> 
            <div class="col"> 
                <h4 class="mb-0 text-white fw-bold">Estamos para servirle</h4> 
                <p class="mb-0 text-white-50">Le invitamos a revisar también nuestros terminos y condiciones como nuestro aviso de privacidad</p> 
            </div> 
            <div class="col-auto"> 
                <a class="btn btn-warning" href="#">Descubrir</a> 
            </div> 
        </div>
    </article>


 


</div>

@endsection