@extends('layout')

@section('title','Productos | '.  $product->name)

@section('content')

<div class="container">
    <div class="row my-5"> 
        <aside class="col-lg-6"> 
            <article class="gallery-wrap gallery-vertical"> 
                <a href="#" class="img-big-wrap img-thumbnail"> 
                    <img height="520" src="/img/big.jpg" class="mix-blend-multiply"> 
                </a> <!-- img-big-wrap.// --> 
                <div class="thumbs-wrap mb-3"> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb1.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb2.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb3.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb4.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb1.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb2.jpg"> 
                    </a> 
                    <a href="#" class="item-thumb"> 
                        <img width="60" height="60" src="/img/thumb3.jpg"> 
                    </a> 
                </div> <!-- thumbs-wrap.// --> 
            </article> <!-- gallery-wrap .end// --> 
        </aside> 
        <div class="col-lg-6"> 
            <article class="ps-lg-3"> 
                <h4 class="title text-dark fw-bold">{{ $product->name }}</h4> 
                <hr> 
                <div class="mb-3"> 
                    <span class="price h5">$815.00</span> 
                    <span class="text-muted">/per kg</span> 
                </div>
                <p>{{ $product->description }}</p>
                <dl class="row"> 
                    <dt class="col-3">Model#</dt><dd class="col-9">Hugo Boss</dd> 
                    <dt class="col-3">Color</dt> <dd class="col-9">Brown</dd> 
                    <dt class="col-3">Material</dt> <dd class="col-9">Cotton, Jeans </dd> 
                    <dt class="col-3">Delivery</dt> <dd class="col-9">Russia, USA, and Europe </dd> 
                </dl>
                <div class="row gx-2 mb-4"> 
                    <form> 
                        <div class="d-flex align-items-center mb-3"> 
                            <div class="input-group" style="max-width:200px"> 
                                <button class="btn btn-icon btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13H5v-2h14v2z"></path> 
                                    </svg> 
                                </button> 
                                <input class="form-control form-control-lg text-center fs-6" type="number" min="0" max="25000" placeholder="" value="0"> 
                                <button class="btn btn-icon btn-warning" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 24 24"> 
                                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path> 
                                    </svg> 
                                </button> 
                            </div> <!-- input-group.// --> 
                            <span class="p-2"> Kg </span> 
                        </div> 
                    </form>
                </div> <!-- row.// --> 
                <div class="mb-4"> 
                    <a href="#" class="btn btn-primary btn-lg mb-4 w-100">Agregar</a> 
                    <ul class="list-icon"> 
                        <li> <i class="icon fa fa-truck"></i> Envíos en toda la zona</li> 
                        <li> <i class="icon fa fa-lock"></i> Pago seguro </li> 
                        <li> <i class="icon fa fa-star"></i> 2 años de garantía completa </li> 
                    </ul>
                </div>
            </article> 
        </div> <!-- col.// -->
    </div> <!-- row.// -->
</div>

@endsection