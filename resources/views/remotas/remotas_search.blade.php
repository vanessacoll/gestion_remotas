@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-hdd"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Remotas</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Listado de Remotas.</p>
  </div>
</div>

@include('themes.template_dark.messages')

@include('themes.template_dark.alert')

<div class="col-12">
  <div class="card" id="table" data-list='{"valueNames":["cliente","serial","remota","address","plan","contencion","satelite","status"],"page":10,"pagination":true,"fallback":"pages-table-fallback"}'>
    <div class="card-header">
      <div class="row flex-between-center">
        <div class="col-auto col-sm-6 col-lg-7">
          @can('registrar_remotas')
          <a class="btn btn-falcon-default btn-md" href="{{route("remotas.create")}}">
            <span class="fas fa-hdd me-md-1"></span>
            <span class="d-none d-md-inline">Agregar Remota</span>
          </a>
          @else
          <a href="#" class="btn btn-falcon-default btn-md" disabled>
            <span class="fas fa-hdd me-md-1"></span>
            <span class="d-none d-md-inline">Agregar Remota</span>
          </a>
          @endcan
        </div>
        <div class="col-auto col-sm-6 col-lg-5">
          <div>
            <form>
              <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search for a page" aria-label="search" /><button class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span class="fa fa-search fs--1"></span></button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body px-0 py-0">
      <div class="table-responsive scrollbar">
        <table class="table fs--1 mb-0 overflow-hidden">
          <thead class="bg-200 text-900">
            <tr>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="cliente">Cliente</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="serial">Serial</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="remota">Remota</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address">Dirección IP</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="plan">Plan</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="contencion">Contencion</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="satelite">Satelite</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="sattus">Estatus</th>             
              <th></th>
            </tr>
          </thead>
          <tbody class="list">
            @foreach($remotas as $remota)
            <tr class="btn-reveal-trigger">

                        <td class="align-middle white-space-nowrap cliente">{{$remota->cliente->nombres}}</td> 
                        <td class="align-middle white-space-nowrap serial">{{$remota->serial}}</td>
                        <td class="align-middle white-space-nowrap remota">{{$remota->nombre}}</td>
                        <td class="align-middle white-space-nowrap address">{{$remota->direccion}}</td>
                        <td class="align-middle white-space-nowrap plan">{{$remota->plan->des_plan}}</td>
                        <td class="align-middle white-space-nowrap contencion">{{$remota->contencion->des_contencion}}</td>
                        <td class="align-middle white-space-nowrap satelite">{{$remota->satelite->des_satelite}}</td>
                        <td class="align-middle white-space-nowrap status">{{$remota->status->des_status}}</td>
                        
                        <td class="align-middle text-end">
                          <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0">
                              
                              @can('editar_remotas')
                              <a class="dropdown-item" href="{{route("remotas.edit",['remota' => $remota->id_remota])}}">Editar</a>
                              @else
                              <a class="dropdown-item"  href="javascript:void(0);" onclick="mostrarAlerta();" disabled>
                                Editar
                              </a>
                              @endcan 

                              @can('borrar_remotas')
                              <a class="dropdown-item text-danger" href="{{route("remotas.destroy", ['remota' => $remota->id_remota])}}">Borrar</a>
                                @else
                                <a class="dropdown-item text-danger" href="javascript:void(0);" onclick="mostrarAlerta();"disabled>
                                  Borrar
                                </a>
                              @endcan 
                           
                            </div>
                          </div>
                        </td>            
                        
            </tr>     
                 @endforeach
          </tbody>
        </table>
      </div>
      <div class="text-center d-none" id="pages-table-fallback">
        <p class="fw-bold fs-1 mt-3">No Encontrado</p>
      </div>
    </div>
    <div class="card-footer">
      <div class="row align-items-center">
        <div class="pagination d-none"></div>
        <div class="col">
          <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
        </div>
        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
      </div>
    </div>
  </div>
</div>

        
@endsection