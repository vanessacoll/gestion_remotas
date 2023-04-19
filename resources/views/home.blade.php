@extends('themes.template_dark.template')

@section('content')

				<div class="col-12">
                  <div class="card  overflow-hidden">
                    <div class="card-header position-relative">
                      <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(/assets/template_dark/img/imagewifi.png);background-size:270px;background-position:right bottom;z-index:-1;margin-top: 1rem;"></div>
                      <!--/.bg-holder-->
                      <div class="position-relative z-index-2">
                        <div>
                          <h3 class="text-primary mb-1">Bienvenido de regreso, {{ Auth::user()->nombres }}!</h3>
                          <p>Estas son nuestras estadisticas de hoy </p>
                        </div>
                        <div class="d-flex py-3">
                          <div class="pe-3">
                            <p class="text-primary fs--1 fw-medium">Remotas Activas</p>
                            <h4 class="text-800 mb-0">{{$remotasactivas->count()}}</h4>
                          </div>
                          <div class="pe-3">
                            <p class="text-primary fs--1 ">Remotas Inactivas</p>
                            <h4 class="text-800 mb-0">{{$remotasinactivas->count()}}</h4>
                          </div>
                          <div class="pe-3">
                            <p class="text-primary fs--1">Remotas Suspendidas</p>
                            <h4 class="text-800 mb-0">{{$remotassuspendidas->count()}}</h4>
                          </div>
                          <div class="pe-3">
                            <p class="text-primary fs--1">Remotas Preactivas</p>
                            <h4 class="text-800 mb-0">{{$remotaspreactivas->count()}}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="row g-3">

                    <div class="col-md-6">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(/assets/template_dark/img/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h6>Clientes</h6>
                           
                          <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":{{$clientes->count()}},"decimalPlaces":0,"suffix":""}'>0</div>
                          
                          @can('clientes')
                          <a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('clientes.index') }}">Ver Clientes<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                          @endcan

                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(/assets/template_dark/img/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h6>Planes y Servicios</h6>

                          <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":{{$planes->count()}},"decimalPlaces":0,"suffix":""}'>0</div>

                          @can('planes')
                          <a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('planes.index') }}">Ver Planes<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                          @endcan

                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(/assets/template_dark/img/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h6>Contenciones</h6>

                          <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":{{$contenciones->count()}},"decimalPlaces":0,"suffix":""}'>0</div>

                          @can('contenciones')
                          <a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('contenciones.index') }}">Ver Contenciones<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                          @endcan

                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                     <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card" style="background-image:url(/assets/template_dark/img/corner-2.png);"></div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                          <h6>Satelites</h6>

                          <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" data-countup='{"endValue":{{$satelites->count()}},"decimalPlaces":0,"suffix":""}'>0</div>

                          @can('satelites')
                          <a class="fw-semi-bold fs--1 text-nowrap" href="{{ route('satelites.index') }}">Ver Satelites<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                          @endcan

                        </div>
                      </div>
                    </div>

                  </div>
                </div>

@endsection