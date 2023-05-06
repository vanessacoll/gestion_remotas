@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-hdd"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Remotas</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Monitoreo de Remotas.</p>
  </div>
</div>


<div class="col-12">
  <div class="card" id="table" data-list='{"valueNames":["cliente","serial","remota","address","plan","contencion","satelite","status"],"page":10,"pagination":true,"fallback":"pages-table-fallback"}'>
    <div class="card-header">
      <div class="row flex-between-center">
        <div class="col-auto col-sm-6 col-lg-7">
        
         <h5>Listado de Remotas</h5>
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
          	<th class="sort pe-1 align-middle white-space-nowrap">Remota</th>
          	<th class="sort pe-1 align-middle white-space-nowrap">Dirección IP</th>
          	<th class="sort pe-1 align-middle white-space-nowrap">Respuesta</th>
           
          </thead>
          <tbody class="list">
            @foreach($remotas as $remota)
            <tr class="btn-reveal-trigger">

            <td class="align-middle white-space-nowrap">
                       
                       <div class="d-flex align-items-center position-relative mb-3">
                        <div class="avatar avatar-2xl {{$remota->clase}}">
                          <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                        </div>
                        <div class="flex-1 ms-3">
                          <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="../pages/user/profile.html">{{$remota->nombre}}</a></h6>
                          <p class="text-500 fs--2 mb-0">{{$remota->cliente->nombres}}</p>
                        </div>
                      </div>

           </td> 
          <td class="align-middle white-space-nowrap">
          	{{$remota->direccion}}
          </td>
          <td class="align-middle white-space-nowrap">
          	{{$remota->respuesta_ping}}
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