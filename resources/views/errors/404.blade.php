@extends('layout')

@section('title',"Pagina no Encontrada")

@section('content')

<section class="bg-primary shadow" style="background-image: url(/img/intro-bg.jpg); background-position: center; background-size: cover;">
    <div class="container align-items-center justify-content-center d-flex" style="min-height: 520px;"> 
        <article class="text-center"> 
            <h1 class="display-4 text-white"> 
                Los grandes productos están<br>siempre disponible en nuestra tienda  
            </h1> <p class="lead text-white">
                Productos de moda, precios de fábrica, excelente servicio
            </p> 
            <a href="{{route('home')}}" class="btn btn-warning btn-lg"> Comprar ahora</a> 
        </article>
    </div> <!-- container end.// -->
</section>

@endsection