<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
   
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light"> 
        <div class="container"> 
            <a class="navbar-brand" href="#"> 
                <img src="/img/logo.svg" height="40" class="logo"> 
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbar_main"> 
                <ul class="navbar-nav me-auto"> 
                    <li class="nav-item"> <a class="nav-link {{ request()->routeIS('home') ? 'active' : '' }}" href="{{ route('home') }}"> Principal </a> </li> 
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Productos</a> 
                        <ul class="dropdown-menu"> 
                            <li> <a class="dropdown-item" href="#"> Congelados </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Refrigerador </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Alacena </a> </li> 
                            <li> <a class="dropdown-item" href="#"> Lavandería </a> </li> 
                        </ul> 
                    </li> 
                    <li class="nav-item"> <a class="nav-link" href="#"> Acerca de </a> </li> 
                    <li class="nav-item"> <a class="nav-link {{ request()->routeIS('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> Contacto </a> </li> 
                </ul> 
                @auth
                    <ul class="navbar-nav"> 
                        <li class="nav-item dropdown"> 
                            <a class="dropdown-toggle ms-md-2 btn btn-outline-dark {{ request()->routeIS('home') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                <i class="fa-solid fa-user me-1"></i><span>{{auth()->user()->name}}</span> 
                            </a> 
                            <ul class="dropdown-menu dropdown-menu-end"> 
                                <li> 
                                    <a class="dropdown-item" href="{{ route('clients.show', auth()->user()->id) }}">
                                        <i class="fa-solid fa-user-gear me-1"></i>Perfil
                                    </a> 
                                </li> 
                                <li> 
                                    <a class="dropdown-item" href="#">
                                        <i class="fa-solid fa-receipt me-1"></i>Tus pedidos
                                    </a> 
                                </li> 
                                <li> <hr class="dropdown-divider"> </li> 
                                <li> 
                                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>
                                </li> 
                            </ul> 
                        </li> 
                    </ul>
                @else
                    <a href="{{ route('login') }}" class="ms-md-2 btn btn-outline-dark {{ request()->routeIS('login') ? 'active' : '' }}"> 
                        <i class="fa-solid fa-user me-1"></i>Tu cuenta
                    </a> 
                @endauth
                <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="ms-md-2 btn btn-primary"> 
                   <i class="fa-solid fa-cart-shopping"></i> Mi despensa (3) 
                </a> 
            </div> <!-- navbar-collapse end.// --> 
        </div> <!-- container end.// --> 
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
   
    @yield('content')

    <aside class="offcanvas offcanvas-end " tabindex="-1" id="offcanvas_cart" aria-modal="true" role="dialog" style="visibility: visible;"> 
        <div class="offcanvas-header border-bottom"> 
            <h5 class="offcanvas-title"> Productos (3) </h5> 
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> 
        </div> 
        <div class="offcanvas-body"> 
            <div class="itemside mb-4"> 
                <div class="aside"> 
                    <img src="/img/14.jpg" class="border img-sm rounded"> 
                </div> 
                <div class="info"> 
                    <a href="#" class="btn btn-outline-danger float-end">
                        <i class="fas fa-trash-alt"></i>
                    </a> 
                    <p> Leather Wallet for Men</p> 
                    <span class="text-muted">1 x $200.95 </span> <br> 
                    <strong class="price"> $400.90 </strong> 
                </div> 
            </div> 
            <div class="itemside mb-4"> 
                <div class="aside"> 
                    <img src="/img/2.jpg" class="border img-sm rounded"> 
                </div> 
                <div class="info"> 
                    <a href="#" class="btn btn-outline-danger float-end">
                        <i class="fas fa-trash-alt"></i>
                    </a> 
                    <p> Canon EOS 1400 Black </p> 
                    <span class="text-muted">2 x $169.95 </span> <br> 
                    <strong class="price"> $339.90 </strong> 
                </div> 
            </div> 
            <div class="itemside mb-4"> 
                <div class="aside"> 
                    <img src="/img/11.jpg" class="border img-sm rounded"> 
                </div> 
                <div class="info"> 
                    <a href="#" class="btn btn-outline-danger float-end">
                        <i class="fas fa-trash-alt"></i>
                    </a> 
                    <p> Winter Jacket for men and lady </p> 
                    <span class="text-muted">2 x $169.95 </span> <br> 
                    <strong class="price"> $339.90 </strong> 
                </div> 
            </div> 
            <hr> 
            <p class="mb-3 text-center fs-5"> Subtotal: <strong>$1,593.00</strong> </p> 
            <div class="mb-3"> 
                <a href="{{route('products.index')}}" class="btn btn-lg btn-success w-100"> Hacer despensa </a> 
            </div> 
            <p class="mb-3 text-center"> 
                <img src="/img/payments.png" height="22"> 
            </p> 
        </div> <!-- offcanvas-body -->
    </aside>


    
    <footer class="section-footer bg-primary footer-dark "> 
        <div class="container"> 
            <section class="footer-main py-5"> 
                <div class="row"> 
                    <aside class="col-lg-4 col-12"> 
                        <article class="me-lg-4 mb-4"> 
                            <h6 class="title">Contact us</h6> 
                            <ul class="list-icon"> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-location-pin icon"></i>Mérida, Yucatán, México <br> Fraccionamiento los Héroes, CP 97314 
                                </li> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-phone-flip icon"></i> (800) 060-0730, (800) 060-0730 
                                </li> 
                                <li class="mb-2"> 
                                    <i class="fa-solid fa-envelope icon"></i> info@despensadigital.com.mx 
                                </li> 
                            </ul> 
                        </article> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title">Compañia</h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> A cerca de </a> </li> 
                            <li> <a href="#"> Empleos </a> </li> 
                            <li> <a href="#"> Terminos y condiciones </a> </li> 
                            <li> <a href="#"> Mapa del sitio </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title"> Servicios </h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> Contacto </a> </li> 
                            <li> <a href="#"> Envíos </a> </li> 
                            <li> <a href="#"> Cancelaciones </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title"> Cuenta </h6> 
                        <ul class="list-menu mb-4"> 
                            <li> <a href="#"> Regístrate </a> </li> 
                            <li> <a href="#"> Iniciar sesión </a> </li> 
                            <li> <a href="#"> Recuperar contraseña </a> </li> 
                        </ul> 
                    </aside> <!-- col end.// --> 
                    <aside class="col-lg col-6"> 
                        <h6 class="title">Redes sociales</h6> 
                        <ul class="list-icon list-menu mb-4"> 
                            <li><a href="#"> <i class="icon fab fa-facebook"></i> Facebook </a></li> 
                            <li><a href="#"> <i class="icon fab fa-twitter"></i> Twitter </a></li> 
                            <li><a href="#"> <i class="icon fab fa-instagram"></i> Instagram </a></li> 
                            <li><a href="#"> <i class="icon fab fa-youtube"></i> Youtube </a></li> 
                        </ul> 
                    </aside> 
                </div> <!-- row end.// --> 
            </section> 
            <hr class="my-0"> 
            <section class="footer-bottom d-flex justify-content-between"> 
                <p class="text-white-50 mb-0"> © 2022 Despensa Digital. Todos los derechos reservados. </p> 
                <div> 
                    <i class="fa-brands fa-lg fa-cc-visa"></i> 
                    <i class="fa-brands fa-lg fa-cc-amex"></i> 
                    <i class="fa-brands fa-lg fa-cc-mastercard"></i> 
                    <i class="fa-brands fa-lg fa-cc-paypal"></i> 
                </div> 
            </section> 
        </div> <!-- container end.// --> 
    </footer>
    
    <!-- Bootstrap -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    
</body>

</html>