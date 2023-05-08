@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary far fa-file-pdf"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Estaciones por CLiente</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Listado de Estaciones por Cliente.</p>
  </div>
</div>

@include('themes.template_dark.messages')

<div class="col-12">
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Listado de Estaciones por Cliente</h5>
        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-41c7dce5-cab3-4edd-ac39-b1d15cf196cf" id="dom-41c7dce5-cab3-4edd-ac39-b1d15cf196cf">
          <form class="row g-3 needs-validation" novalidate="" method="GET" action="{{route("estacionescli.search")}}"target="_blank">
            @csrf

<div class="col-12">
<label for="tipo_cliente">Tipo de Cliente</label>
<select class="form-select js-basic-single" name="tipo_cliente" id="tipo_cliente" size="1" required="">
  <option value="">Seleccione</option>
  @foreach($tip_clientes as $tip_cliente)
     <option value="{{$tip_cliente->id_tip}}">  {{$tip_cliente->des_tip}}</option>
 @endforeach
</select>
<div class="invalid-feedback">Debe seleccionar un tipo de Cliente.</div>
</div>

<div class="col-12">
  <label for="clientes">Cliente</label>
  <select class="form-select js-basic-single" name="cliente" id="cliente">
    <option>Seleccione</option>
  </select>
  </div>

<div class="col-12">
  <div class="row flex-between-center">
  <div class="col-auto"><button class="btn btn-primary" type="submit">Buscar</button></div>
  </div>
</div>

</form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
