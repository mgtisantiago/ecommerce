@extends('layout')

@section('title',"Registro")

@section('content')

<div class="container my-4">
    <div class="row gy-4">
        <aside class="col-lg-4 col-md-6 mx-auto"> <!-- ============= COMPONENT LOGIN 2 ============ --> 
            <div class="card"> 
                <div class="card-body"> 
                    <h4 class="mb-4 text-center fw-bold">Crea una cuenta</h4> 
                    <form> 
                        <div class="d-flex gap-2"> 
                            <a href="#" class="d-flex align-items-center btn btn-light w-100"> 
                                <img class="me-2" src="img/facebook.svg" height="20" width="20"> 
                                Facebook 
                            </a> 
                            <a href="#" class="d-flex align-items-center btn btn-light w-100"> 
                                <img class="me-2" src="img/google.svg" height="20" width="20"> 
                                Google 
                            </a> 
                        </div> 
                        <p class="text-divider my-4"> ¿Tienes cuenta? Ingresa con tus datos </p> 
                        <div class="mb-3"> 
                            <input type="text" class="form-control" placeholder="Correo electrónico"> 
                        </div> 
                        <div class="mb-3 input-group"> 
                            <input type="password" class="form-control" placeholder="Contraseña"> 
                            <button type="button" class="btn btn-light"> 
                                <i class="text-muted fa fa-eye"></i> </button> 
                        </div> 
                        <div class="mb-3"> 
                            <label class="form-check"> 
                                <input class="form-check-input" type="checkbox" value="" checked=""> 
                                <span class="form-check-label"> Recordar </span> 
                            </label> 
                        </div> <!-- col end.// --> 
                        <div class="mb-4"> 
                            <button class="btn w-100 btn-primary" type="button"> Sign in </button> 
                        </div> 
                        <p class="mb-1 text-center">¿No tienes una cuenta?
                            <a href="#">Registrate</a>
                        </p> 
                    </form> <!-- form end.// --> 
                </div> <!-- card-body end.// --> 
            </div> <!-- card end.// --> <!-- ============= COMPONENT LOGIN 2 END.// ============== --> 
        </aside>
    </div>
</div>

@endsection