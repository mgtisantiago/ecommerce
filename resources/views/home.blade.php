@extends('layout')

@section('title',"Despensa Digital")

@section('content')

<div class="card  p-5" style="min-height:280px; background-size: cover; background-image: url('img/bg-food.jpg');"> 
    <header class="text-center mt-5"> 
        <h1 class="text-white">Ordene tu despensa en línea ahora</h1> 
        <p class="text-white">Descubre los mejores productos de tu zona</p> 
    </header> 
    <!-- <form class="mx-auto w-100 mb-3" style="max-width: 720px"> 
        <div class="row g-2 w-100"> 
            <div class="col flex-grow"> 
                <div class="input-group"> 
                    <select class="form-select form-control-lg" style="max-width:30%"> 
                        <option>Don pancho</option> 
                        <option>Doña Martha</option> 
                    </select> 
                    <input type="text" placeholder="Buscar en Despensa Digital" class="form-control form-control-lg" name=""> 
                </div> 
            </div> 
            <div class="col-auto"> 
                <button class="btn btn-lg btn-warning px-4 py-2"> Buscar </button> 
            </div> 
        </div> 
    </form> -->
</div>

<div class="container">
    <div class="row gy-3 my-3"> 
        <div class="col-lg-8"><!-- ============ COMPONENT BANNER 7 ============ -->
            <div class="card-banner overlay-gradient" style="min-height:230px; background-image: url('img/banner1.jpg');"> 
                <div class="card-img-overlay"> 
                    <h3 class="card-title text-white">Celulares y Tabletas</h3> 
                    <p class="card-text text-white" style="max-width: 400px"> 
                        No importa qué tan avanzado esté en su sofisticación como camarógrafo aficionado, siempre hay uno.
                    </p> 
                   <!--  <a href="" class="btn btn-warning">Ver mas productos</a>  -->
                </div>
            </div><!-- ============ COMPONENT BANNER 7 END .// ============ --> 
        </div> <!-- col.// --> 
        <div class="col-lg-4 col-md-6"><!-- ============ COMPONENT BANNER 8 ============ -->
            <div class="card-banner overlay-gradient" style="min-height:230px; background-image: url('img/3.jpg');"> 
                <div class="card-img-overlay"> 
                    <h5 class="card-title text-white">De la milpa a su hogar</h5> 
                    <p class="card-text text-white">
                        Nuestros productos están siempre frescos, de primera calidad. Trabajamos de cerca con los mejores agricultores de la zona.
                    </p> 
                </div>
            </div><!-- ============ COMPONENT BANNER 8 END .// ============ --> 
        </div> <!-- col.// -->
    </div>

    <div class="row gy-3 my-3"> 
        <div class="col-lg-4 col-md-6"> <!-- ================ COMPONENT ITEM BG ================ --> 
            <div class="card card-banner"> 
                <div class="p-4" style="width:70%"> 
                    <h5 class="fw-bold">iPad Pro</h5> 
                    <p class="mb-0">Realice su despensa utilizando su tableta para que no le falte nada</p> 
                </div> 
                <img src="img/banner-item1.jpg" height="150" class="img-bg"> 
            </div> <!-- ================ COMPONENT ITEM BG END .// ================ --> 
        </div> <!-- col.// --> 
        <div class="col-lg-4 col-md-6"> <!-- ================ COMPONENT ITEM BG ================ --> 
            <div class="card card-banner"> 
                <div class="p-4" style="width:70%"> 
                    <h5 class="fw-bold">Smart Watch</h5> 
                    <p class="mb-0">Recibe notificaciones de su despensa para revisarla en su teléfono inteligente</p> 
                </div> 
                <img src="img/banner-item2.jpg" height="150" class="img-bg"> 
            </div> <!-- ================ COMPONENT ITEM BG END .// ================ --> 
        </div> <!-- col.// --> 
        <div class="col-lg-4 col-md-6"> <!-- ================ COMPONENT ITEM BG ================ --> 
            <div class="card card-banner"> 
                <div class="p-4" style="width:70%"> 
                    <h5 class="fw-bold">Grandes drones</h5> 
                    <p class="mb-0">Reciba también ahora su despensa con nuestros drones inteligentes</p> 
                </div> 
                <img src="img/banner-item3.jpg" height="150" class="img-bg"> 
            </div> <!-- ================ COMPONENT ITEM BG END .// ================ --> 
        </div> <!-- col.// -->
    </div>

   <!--  <h3 class="my-3">Abarrotes</h3>
    <div class="card card-body my-3"> 
        <div class="row"> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div>
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="row"> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div>
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div>
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
            <div class="col-lg-3 col-md-6"> 
                <div class="itemside mb-4"> 
                    <div class="aside">
                        <img src="img/1.jpg" class="img-sm img-thumbnail">
                    </div> 
                    <div class="info"> 
                        <a href="#" class="title">The name of item here</a> 
                        <div class="price">$1280 </div> 
                        <a href="#" class="btn btn-primary-light btn-sm"> Add to cart </a> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div> -->

    <h3 class="my-3">Ropa</h3>
    <div class="card card-body my-3"> 
        <div class="row"> 
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6"> 
                    <a href="{{ route('products.show', $product) }}" class="itemside align-items-center my-2">
                        <div class="aside">
                            <img src="img/big.jpg" class="img-sm img-thumbnail" />
                        </div> 

                        <div class="info"> 
                            <p class="title"> {{ $product->name }}</p> 
                            <div class="price">$250</div>
                            <button type="button" class="btn btn-primary-light btn-sm"> Agregar</button> 
                        </div>
                        
                    </a> 
                </div>
            @endforeach
        </div>
    </div>
</div>




@endsection