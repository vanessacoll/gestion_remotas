@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-signal"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Contenciones</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Actualización de Contenciones</p>
  </div>
</div>



<div class="col-12">
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Actualizar Contención</h5>
          <p class="mb-0 pt-1 mt-2 mb-0"></p>
        </div>
      </div>  
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-38a32f7e-f5bc-4ab8-b418-b5669185d206" id="dom-38a32f7e-f5bc-4ab8-b418-b5669185d206">
          <form class="row g-3 needs-validation"  method="GET" action="{{route("contenciones.update",['contencion' => $contencion->id_contencion])}}">

            @csrf

            <input value="{{$contencion->id_contencion}}" name="id_contencion"  type="text" hidden>


            <div class="col-md-12">
              <label class="form-label" for="nombres">Nombres</label>
              <input class="form-control" value="{{$contencion->des_contencion}}" id="nombre" name="nombre" type="text" required="" />
              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div>   

            
            <div class="col-12">  
             <div class="row flex-between-center">
             <div class="col-auto"><button class="btn btn-primary">Guardar</button></div>
             <div class="col-auto"><a class="fs--1 font-sans-serif" href="{{route("contenciones.index")}}">Cerrar</a></div>
             </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection