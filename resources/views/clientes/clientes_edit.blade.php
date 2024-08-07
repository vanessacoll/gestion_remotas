@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-user-alt"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Clientes</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Actualizar Clientes.</p>
  </div>
</div>

<div class="col-12">

  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Modificar datos de Clientes</h5>
          <p class="mb-0 pt-1 mt-2 mb-0">Complete todos los datos del siguiente formulario.</p>
        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-38a32f7e-f5bc-4ab8-b418-b5669185d206" id="dom-38a32f7e-f5bc-4ab8-b418-b5669185d206">
          <form class="row g-3" method="GET" action="{{route("clientes.update",['cliente' => $cliente->id_cliente])}}">
            @method("PUT")
                @csrf
            <div class="col-md-3">
              <label class="form-label" for="cedulas">Cedula</label>
              <input class="form-control" value="{{$cliente->cedula}}" id="cedula" name="cedula" type="text" />
            </div>
            <div class="col-md-9">
              <label class="form-label" for="nombres">Nombres</label>
              <input class="form-control" value="{{$cliente->nombres}}" id="nombre" name="nombre" type="text" placeholder="Ingrese Nombres" />
            </div>
            <div class="col-12">
              <label class="form-label" for="direccion">Direccion</label>
              <input class="form-control" value="{{$cliente->direccion}}" id="direccion" name="direccion" type="text" />
            </div>
            <div class="col-6">
              <label class="form-label" for="email">Email</label>
              <input class="form-control" value="{{$cliente->email}}" name="email" id="email" type="email" />
            </div>
            <div class="col-6">
              <label class="form-label" for="telefono">Telefono</label>
              <input class="form-control" value="{{$cliente->telefono}}" name="telefono" id="telefono" type="text" />
            </div>
            <div class="col-md-6">
              <label class="form-label" for="id_status">Estatus</label>
              <select class="form-select" name="id_status" id="id_status">
                <option value="">Seleccione</option>
                @foreach($statuss as $status)
                <option value="{{$status->id_status}}" @if( $cliente->id_status === $status->id_status) selected='selected' @endif>  {{$status->des_status}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="id_tipcli">Tipo de Cliente</label>
              <select class="form-select" name="id_tipcli" id="id_tipcli">
                <option value="">Seleccione</option>
                @foreach($tip_clientes as $tip_cliente)
                <option value="{{$tip_cliente->id_tip}}" @if( $cliente->id_tipcli === $tip_cliente->id_tip) selected='selected' @endif>  {{$tip_cliente->des_tip}}</option>
                @endforeach
              </select>
            </div>   

            <div class="col-12">
              <div class="row flex-between-center">
              <div class="col-auto"><button class="btn btn-primary" type="submit">Actualizar</button></div>
              <div class="col-auto"><a class="fs--1 font-sans-serif" href="{{route("clientes.search")}}">Cerrar</a></div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection