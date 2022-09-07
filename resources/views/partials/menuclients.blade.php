
<div class="container my-4">
    <div class="row">
        <aside class="col-sm-3">
            <div class="card p-3 h-100">
                <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> 
                    <a class="nav-link active" href="{{ route('clients.show', auth()->user()->id) }}">Mi perfil</a>  
                    <a class="nav-link" href="{{ route('directions.show', auth()->user()->id) }}">Mi cuenta</a> 
                    <a class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false"   href="#v-pills-orders">Mis pedidos</a> 
                </nav>
            </div> 
        </aside>
        <div class="col-sm-9">
            <div class="tab-content">
                @yield('tabs')
            </div>
        </div>
    </div>
</div>




