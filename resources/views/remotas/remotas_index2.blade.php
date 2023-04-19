@extends('themes.template_dark.template')
    
@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-hdd"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Remotas</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Historico de Remotas.</p>
  </div>
</div>


@include('themes.template_dark.messages')

<div class="col-12">
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Buscar Remotas</h5>
        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-41c7dce5-cab3-4edd-ac39-b1d15cf196cf" id="dom-41c7dce5-cab3-4edd-ac39-b1d15cf196cf">
          <form class="row g-3 needs-validation" novalidate="" method="GET" action="{{route("remotas.searchlis",['request' => "cedula"])}}">
            @csrf

<div class="col-12">
<label for="organizerSingle">Cliente</label>
<select class="form-select js-choice" name="cedula" id="organizerSingle" size="1" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}' required="">
  <option value="">Seleccione</option>
  @foreach($clientes as $cliente)
     <option value="{{$cliente->cedula}}">  {{$cliente->cedula}} - {{$cliente->nombres}} </option>
 @endforeach
</select>
<div class="invalid-feedback">Debe seleccionar un cliente.</div>
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