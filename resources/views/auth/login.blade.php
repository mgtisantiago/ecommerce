
@extends('layout')

@section('title',"Tu Cuenta")

@section('content')

<div class="container my-4">
    <div class="row justify-content-center gy-4">
    
       {{--  <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  --}}

        <div class="col-lg-4 col-md-6 mx-auto"> <!-- ============= COMPONENT LOGIN 2 ============ --> 
            <div class="card"> 
                <div class="card-body"> 
                    <h4 class="mb-4 text-center fw-bold">Crea una cuenta</h4> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf 
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Correo electrónico">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 

                        <div class="mb-3 input-group"> 
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="button" class="btn btn-light"> 
                                <i class="text-muted fa fa-eye"></i> 
                            </button>
                   
                        </div> 
                        <div class="mb-3"> 
                            <div class="form-check"> 
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div> 
                        </div> <!-- col end.// --> 
                        <div class="mb-4"> 
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link w-100" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div> 
                        <p class="mb-1 text-center">¿No tienes una cuenta?
                            <a href="#">Registrate</a>
                        </p> 
                    </form> <!-- form end.// --> 
                </div> <!-- card-body end.// --> 
            </div> <!-- card end.// --> <!-- ============= COMPONENT LOGIN 2 END.// ============== --> 
        </div> 

    </div>
</div>


@endsection
