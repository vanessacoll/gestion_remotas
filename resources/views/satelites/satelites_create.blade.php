@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-satellite"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Satelites</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Registro de Satelites</p>
  </div>
</div>

<div class="col-12">
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Nuevo Satelite</h5>
          <p class="mb-0 pt-1 mt-2 mb-0"></p>
        </div>
      </div>  
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-38a32f7e-f5bc-4ab8-b418-b5669185d206" id="dom-38a32f7e-f5bc-4ab8-b418-b5669185d206">
          <form class="row g-3 needs-validation"  method="GET" action="{{route("satelites.store")}}">
            @csrf

            <div class="col-md-12">
              <label class="form-label" for="nombres">Nombre</label>
              <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese Nombre" required="" />
              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div> 
                 
            <div class="col-md-12">
              <label class="form-label" for="nombres">Azimuth</label>
              <input class="form-control" id="nombre" name="ubicacion_azi" type="text" placeholder="Ubicacion AZI ..." required="" />
              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div> 
                 
            <div class="col-md-12">
              <label class="form-label" for="nombres">Elevación</label>
              <input class="form-control" id="nombre" name="ubicacion_ele" type="text" placeholder="Ubicacion ELE ..." required="" />
              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div> 
              
            <div class="col-md-12">
              <label class="form-label" for="nombres">Polarizador</label>
              <input class="form-control" id="nombre" name="ubicacion_pol" type="text" placeholder="Ubicacion POL ..." required="" />
              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div> 

            <div class="col-12">  
             <div class="row flex-between-center">
             <div class="col-auto"><button class="btn btn-primary">Guardar</button></div>
             <div class="col-auto"><a class="fs--1 font-sans-serif" href="{{route("satelites.index")}}">Cerrar</a></div>
             </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection