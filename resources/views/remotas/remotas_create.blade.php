@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-hdd"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Remotas</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Agregar Remotas.</p>
  </div>
</div>


@include('themes.template_dark.messages')

<div class="col-12">

  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Registrar Remotas</h5>
          <p class="mb-0 pt-1 mt-2 mb-0">Complete todos los datos del siguiente formulario.</p>
        </div>
      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-38a32f7e-f5bc-4ab8-b418-b5669185d206" id="dom-38a32f7e-f5bc-4ab8-b418-b5669185d206">
          <form class="row g-3 needs-validation" novalidate="" method="GET" action="{{route("remotas.store")}}">
            @csrf

            <div class="col-12">
              <label for="organizerSingle">Cliente</label>
              <select class="form-select js-basic-single" name="id_cliente" id="organizerSingle" size="1" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}' required="">
                <option value="">Seleccione</option>
                @foreach($clientes as $cliente)
                   <option value="{{$cliente->id_cliente}}">  {{$cliente->cedula}} - {{$cliente->nombres}} </option>
               @endforeach
              </select>
              <div class="invalid-feedback">Debe seleccionar un cliente.</div>
              </div>

              <div class="col-6">
                <label class="form-label" for="nombre">Remota</label>
                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Ingrese Nombre Remota" required="" />
                <div class="invalid-feedback">Debe ingresar nombre remota.</div>
              </div>

            <div class="col-6">
              <label class="form-label" for="serial">Serial</label>
              <input class="form-control" name="serial" id="serial" type="text" placeholder="Ingrese Serial" required="" />
              <div class="invalid-feedback">Debe ingresar serial.</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="modmodem">Modelo Modem</label>
              <input class="form-control" name="modmodem" id="modmodem" type="text" placeholder="Ingrese Modelo del Modem" required="" />
              <div class="invalid-feedback">Debe ingresar modelo del modem.</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="localidad">Localidad</label>
              <input class="form-control" name="localidad" id="localidad" type="text" placeholder="Ingrese Localidad" required="" />
              <div class="invalid-feedback">Debe ingresar localidad.</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="direccion">Direccion IP</label>
              <input class="form-control" name="direccion" id="direccion" type="text" placeholder="Ingrese Direccion IP" required="" />
              <div class="invalid-feedback">Debe ingresar Direccion IP.</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="email">Coordenadas</label>
              <input class="form-control" name="coordenadas" id="coordenada" type="coordenadas" placeholder="Ingrese Coordenadas" required="" />
              <div class="invalid-feedback">Debe ingresar coordenadas.</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="antena">Antena</label>
              <input class="form-control" name="antena" id="antena" type="text" placeholder="Ingrese Antena" required="" />
              <div class="invalid-feedback">Debe ingresar Antena.</div>
            </div>
            <div class="col-6">
              <label class="form-label" for="tip_antena">Tipo de Antena</label>
              <input class="form-control" name="tip_antena" id="tip_antena" type="text" placeholder="Ingrese Tipo de Antena" required="" />
              <div class="invalid-feedback">Debe ingresar tipo de antena.</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="buc">BUC (Transmisor)</label>
              <input class="form-control" name="buc" id="buc" type="text" placeholder="Ingrese BUC (Transmisor)" required="" />
              <div class="invalid-feedback">Debe ingresar BUC (Transmisor).</div>
            </div>

            <div class="col-6">
              <label class="form-label" for="lnb">LNB (Receptor)</label>
              <input class="form-control" name="lnb" id="lnb" type="text" placeholder="Ingrese LNB (Receptor)" required="" />
              <div class="invalid-feedback">Debe ingresar LNB (Receptor).</div>
            </div>
        
                    
            <div class="col-md-6">
              <label class="form-label" for="id_plan">Plan</label>
              <select class="form-select js-basic-single" name="id_plan" id="id_plan" required="">
                <option value="">Seleccione</option>
                @foreach($planes as $plan)
                  <option value="{{$plan->id_plan}}">  {{$plan->des_plan}}
                  </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Debe seleccionar plan.</div>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="id_contencion">Contencion</label>
              <select class="form-select js-basic-single" name="id_contencion" id="id_contencion" required="">
                <option value="">Seleccione</option>
                @foreach($contenciones as $contencion)
                   <option value="{{$contencion->id_contencion}}">  {{$contencion->des_contencion}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">Debe seleccionar contencion.</div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="id_satelite">Satelite</label>
              <select class="form-select js-basic-single" name="id_satelite" id="id_satelite" required="">
                <option value="">Seleccione</option>
                @foreach($satelites as $satelite)
                 <option value="{{$satelite->id_satelite}}">  {{$satelite->des_satelite}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">Debe seleccionar satelite.</div>
            </div>   
            <div class="col-md-6">
              <label class="form-label" for="id_status">Estatus</label>
              <select class="form-select js-basic-single" name="id_status" id="id_status" required="">
                <option value="">Seleccione</option>
                @foreach($statuss as $status)
                  <option value="{{$status->id_status}}">  {{$status->des_status}}
                  </option>
                @endforeach
              </select>
              <div class="invalid-feedback">Debe seleccionar Estatus.</div>
            </div>   
              <div class="col-12">
                <div class="row flex-between-center">
                <div class="col-auto"><button class="btn btn-primary" type="submit">Registrar</button></div>
                <div class="col-auto"><a class="fs--1 font-sans-serif" href="{{route("remotas.search")}}">Cerrar</a></div>
                </div>
              </div>
          
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    @endsection