@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-hdd"></i></span>
       <div class="col">
         <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Remotas</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
         <p class="mb-0">Informacion de Remotas.</p>
       </div>
</div>

<form method="GET" action="{{route("remotas.searchlis",['request' => "cedula"])}}">
       @csrf
<div class="col-xxl-2 col-xl-2">

        <div class="d-flex">
              <input value="{{$clientes->cedula}}" name="cedula" hidden>
           <button class="btn btn-falcon-default d-none bg-light d-sm-block me-2">
              <span class="d-none d-xl-inline-block ms-1">Volver</span>
           </button>
        
         </div>
</div>
</form>    
<div class="col-xxl-12 col-xl-12">
       <div class="card overflow-hidden">
         <div class="card-header p-0 scrollbar-overlay border-bottom">
           <ul class="nav nav-tabs border-0 tab-contact-details flex-nowrap" id="contact-details-tab" role="tablist">
              <li class="nav-item text-nowrap" role="presentation"><a class="nav-link mb-0 d-flex align-items-center gap-1 py-3 px-x1 active" id="contact-timeline-tab" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true"><span class="fas fa-user-alt icon text-600"></span>
                 <h6 class="mb-0 text-600">Información del Cliente</h6>
               </a></li>
             <li class="nav-item text-nowrap" role="presentation"><a class="nav-link mb-0 d-flex align-items-center gap-1 py-3 px-x1" id="contact-tickets-tab" data-bs-toggle="tab" href="#tickets" role="tab" aria-controls="tickets" aria-selected="false"><span class="fas fa-history icon text-600"></span>
                 <h6 class="mb-0 text-600">Historico de Cambios a Remotas</h6>
               </a></li>
           </ul>
         </div>
         <div class="tab-content">
              <div class="card-body  tab-pane active p-0" id="timeline" role="tabpanel" aria-labelledby="contact-timeline-tab">
              <div class="bg-light d-flex flex-column gap-3 p-x1" >
                     <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                         <div class="row flex-between-center">
                           <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                             <h5 class="mb-0 border-md-0 border-xxl-0 border-200 border-xl-200">Cliente</h5>
                           </div>
                        
                         </div>
                         <div class="w-lg-75 w-xl-100 w-xxl-75 mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-4 mt-xl-x1 mt-xxl-4 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200"></div>
                     
                         <div class="row">
                            <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                             <div class="flex-1 mb-2">
                              <h6>Cedula:</h6>
                              <p class="fs--1">{{$clientes->cedula}}</p>
                             </div>

                            <div class="flex-1 mb-2">
                              <h6>Direccion:</h6>
                              <p class="mb-1 fs--1">{{$clientes->direccion}}</p>
                            </div>

                            <div class="flex-1 mb-2">
                              <h6>Email:</h6>
                              <p class="mb-1 fs--1">{{$clientes->email}}</p>
                            </div>

                            <div class="flex-1 mb-2">
                              <h6>Estatus:</h6>
                              <p class="mb-1 fs--1">{{$clientes->status->des_status}}</p>
                            </div>
                            </div>

                            <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                             
                            <div class="flex-1 mb-2">
                              <h6 class="mb-2">Nombre del Cliente:</h6>
                              <p class="mb-0 fs--1">{{$clientes->nombres}}</p>
                            </div>

                            <div class="flex-1 mb-2">
                              <h6 class="mb-2">Telefono:</h6>
                              <p class="mb-0 fs--1">{{$clientes->telefono}}</p>
                            </div>

                            <div class="flex-1 mb-2">
                              <h6 class="mb-2">Tipo de Cliente:</h6>
                              <p class="mb-0 fs--1">{{$clientes->tip_cliente->des_tip}}</p>
                            </div>

                            </div>
                          </div>
                     </div>

                     <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                            <div class="row flex-between-center">
                              <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                                <h5 class="mb-0 border-md-0 border-xxl-0 border-200 border-xl-200">Remota</h5>
                              </div>
                           
                            </div>
                            <div class="w-lg-75 w-xl-100 w-xxl-75 mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-4 mt-xl-x1 mt-xxl-4 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200"></div>
                     
                            <div class="row">
                                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                    <div class="flex-1 mb-2">
                                     <h6>Remota:</h6>
                                     <p class="fs--1">{{$remotas->nombre}}</p>
                                    </div>
       
                                   <div class="flex-1 mb-2">
                                     <h6>Serial:</h6>
                                     <p class="mb-1 fs--1">{{$remotas->serial}}</p>
                                   </div>
       
                                   <div class="flex-1 mb-2">
                                     <h6>Modelo Modem:</h6>
                                     <p class="mb-1 fs--1">{{$remotas->modmodem}}</p>
                                   </div>
       
                                   <div class="flex-1 mb-2">
                                     <h6>Localidad:</h6>
                                     <p class="mb-1 fs--1">{{$remotas->localidad}}</p>
                                   </div>

                                   <div class="flex-1 mb-2">
                                     <h6>LNB (Receptor):</h6>
                                     <p class="mb-1 fs--1">{{$remotas->lnb}}</p>
                                   </div>

                                   <div class="flex-1 mb-2">
                                     <h6>Estatus:</h6>
                                     <p class="mb-1 fs--1">{{$remotas->status->des_status}}</p>
                                   </div>
                                   </div>
       
                                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                    
                                   <div class="flex-1 mb-2">
                                     <h6 class="mb-2">Direccion IP:</h6>
                                     <p class="mb-0 fs--1">{{$remotas->direccion}}</p>
                                   </div>
       
                                   <div class="flex-1 mb-2">
                                     <h6 class="mb-2">Antena:</h6>
                                     <p class="mb-0 fs--1">{{$remotas->antena}}</p>
                                   </div>
       
                                   <div class="flex-1 mb-2">
                                     <h6 class="mb-2">Tipo de Antena:</h6>
                                     <p class="mb-0 fs--1">{{$remotas->tip_antena}}</p>
                                   </div>

                                   <div class="flex-1 mb-2">
                                     <h6 class="mb-2">Coordenadas:</h6>
                                     <p class="mb-0 fs--1">{{$remotas->coordenadas}}</p>
                                   </div>

                                   <div class="flex-1 mb-2">
                                     <h6 class="mb-2">BUC (Transmisor):</h6>
                                     <p class="mb-0 fs--1">{{$remotas->buc}}</p>
                                   </div>
       
                                   </div>
                                 </div>
                     </div>

                     <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                            <div class="row flex-between-center">
                              <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                                <h5 class="mb-0 border-md-0 border-xxl-0 border-200 border-xl-200">Plan</h5>
                              </div>
                           
                            </div>
                            <div class="w-lg-75 w-xl-100 w-xxl-75 mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-4 mt-xl-x1 mt-xxl-4 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200"></div>
                     
                               <div class="row">
                                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                    <div class="flex-1 mb-2">
                                     <h6>Plan:</h6>
                                     <p class="fs--1">{{$remotas->plan->des_plan}}</p>
                                    </div>
                            
                                    </div>     
                               </div>
                     </div>

                     <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                            <div class="row flex-between-center">
                              <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                                <h5 class="mb-0 border-md-0 border-xxl-0 border-200 border-xl-200">Contencion</h5>
                              </div>
                           
                            </div>
                            <div class="w-lg-75 w-xl-100 w-xxl-75 mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-4 mt-xl-x1 mt-xxl-4 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200"></div>
                     
                               <div class="row">
                                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                    <div class="flex-1 mb-2">
                                     <h6>Contencion:</h6>
                                     <p class="fs--1">{{$remotas->contencion->des_contencion}}</p>
                                    </div>
                            
                                    </div>     
                               </div>
                     </div>

                     <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                            <div class="row flex-between-center">
                              <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                                <h5 class="mb-0 border-md-0 border-xxl-0 border-200 border-xl-200">Satelite</h5>
                              </div>
                           
                            </div>

                            <div class="w-lg-75 w-xl-100 w-xxl-75 mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-4 mt-xl-x1 mt-xxl-4 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200"></div>
                     
                            <div class="row">
                                   <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                                    <div class="flex-1 mb-2">
                                     <h6>Satelite:</h6>
                                     <p class="fs--1">{{$remotas->satelite->des_satelite}}</p>
                                    </div>
                            
                                    </div>     
                            </div>
                     </div>

              </div>
                     
           </div>

           <div class="card-body bg-light tab-pane" id="tickets" role="tabpanel" aria-labelledby="contact-tickets-tab">
 
              <div class="col-12">
                     <div class="card bg-white dark__bg-1100 rounded-3 shadow-sm" id="table" data-list='{"valueNames":["cliente","address","antena","buc","lnb","plan","contencion","satelite","status","user","date","justificacion"],"page":10,"pagination":true,"fallback":"pages-table-fallback"}'>
                       <div class="card-header">
                         <div class="row flex-between-center">
                           <div class="col-auto col-sm-6 col-lg-7">
                            <h5>Remota {{$remotas->nombre}}</h5>
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
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address">Dirección</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="antena">Antena</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="buc">BUC</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="lnb">LNB</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="plan">Plan</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="contencion">Contencion</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="satelite">Satelite</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="status">Status</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="user">Usuario</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="date">Fecha</th>
                                 <th class="sort pe-1 align-middle white-space-nowrap" data-sort="justificacion">Justificacion</th>
                               </tr>
                             </thead>
                             <tbody class="list">
                               @foreach($hisremotas as $hisremota)
                               <tr class="btn-reveal-trigger">
                                           
                                           <td class="align-middle white-space-nowrap cliente">{{$hisremota->cliente->nombres}}</td> 
                                           <td class="align-middle white-space-nowrap address">{{$hisremota->direccion}}</td>
                                           <td class="align-middle white-space-nowrap antena">{{$hisremota->antena}}</td>
                                           <td class="align-middle white-space-nowrap buc">{{$hisremota->buc}}</td>
                                           <td class="align-middle white-space-nowrap lnb">{{$hisremota->lnb}}</td>
                                           <td class="align-middle white-space-nowrap plan">{{$hisremota->plan->des_plan}}</td>
                                           <td class="align-middle white-space-nowrap contencion">{{$hisremota->contencion->des_contencion}}</td>
                                           <td class="align-middle white-space-nowrap satelite">{{$hisremota->satelite->des_satelite}}</td>
                                           <td class="align-middle white-space-nowrap status">{{$hisremota->status->des_status}}</td>
                                           <td class="align-middle white-space-nowrap user">{{$hisremota->username}}</td>
                                           <td class="align-middle white-space-nowrap date">{{$hisremota->created_at}}</td>
                                           <td class="align-middle white-space-nowrap justificacion">{{$hisremota->justificacion->des_just}}</td>             
                                           
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
                   
       
          </div>

       <!--tab-content-->
         </div>
       </div>
    </div>
@endsection

  