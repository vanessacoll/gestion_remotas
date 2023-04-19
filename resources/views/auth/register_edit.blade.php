@extends('themes.template_dark.template')

@section('content')

<div class="d-flex mb-4 mt-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fa fa-laptop"></i></span>
  <div class="col">
    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Usuarios</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
    <p class="mb-0">Actualización de usuarios</p>
  </div>
</div>

<div class="col-12">
  <div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor">Editar Usuario</h5>
          <p class="mb-0 pt-1 mt-2 mb-0"></p>
        </div>
      </div>  
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-38a32f7e-f5bc-4ab8-b418-b5669185d206" id="dom-38a32f7e-f5bc-4ab8-b418-b5669185d206">
          <form class="row g-3 needs-validation"  method="GET" action="{{route("register.update",['user' => $user->id])}}">
            @csrf

            <div class="col-md-12">
              <label class="form-label" for="nombres">{{ __('Usuario') }}</label>

              <input class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" value="{{$user->username}}" type="text" placeholder="Usuario" required autocomplete="name"
              @if( $val->name <> 'Soporte u Operaciones')  disabled @endif>

              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

              <div class="invalid-feedback">Debe ingresar nombres.</div>
            </div> 
                 
            
            <div class="col-md-12">

              <label class="form-label" for="nombres">{{ __('Nombres') }}</label>

              <input class="form-control @error('nombres') is-invalid @enderror " id="nombre" name="nombres" value="{{$user->nombres}}" type="text" placeholder="Nombre" required autocomplete="nombres" 
              @if( $val->name <> 'Soporte u Operaciones')  disabled @endif >             

              @error('nombres')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <div class="invalid-feedback">Debe ingresar nombres.</div>

            </div> 

                 
            <div class="col-md-12">

              <label class="form-label" for="nombres">{{ __('E-Mail') }}</label>

              <input class="form-control @error('email') is-invalid @enderror" id="nombre" name="email" value="{{$user->email}}" type="email" placeholder="Email" required autocomplete="email" 
              @if( $val->name <> 'Soporte u Operaciones')  disabled @endif >

              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <div class="invalid-feedback">Debe ingresar nombres.</div>

            </div> 
              

            <div class="col-md-12">

              <label class="form-label" for="nombres">{{ __('Contraseña') }}</label>

              <input class="form-control @error('password') is-invalid @enderror" id="nombre" name="password"  type="password" placeholder="Contraseña" required autocomplete="new-password" />
             
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <div class="invalid-feedback">Debe ingresar nombres.</div>

            </div> 


            <div class="col-md-12">

              <label class="form-label" for="nombres">{{ __('Confirmar Contraseña') }}</label>

              <input class="form-control" id="nombre" name="password_confirmation" type="password" placeholder="Confirmar contraseña" required autocomplete="new-password" />

              <div class="invalid-feedback">Debe ingresar nombres.</div>

            </div> 

            
            <div class="col-md-12">
              <label class="form-label" for="perfil">{{ __('Perfil') }}</label>

              <select class="form-select"  required name="name_role" @if( $val->name <> 'Soporte u Operaciones')  disabled @endif >

                <option value="">Seleccione</option>

                @foreach($roles as $role)

                <option value="{{$role->name}}" @foreach($model_has_roles as $model_has_rol)  @if( $user->id === $model_has_rol->model_id && $role->id === $model_has_rol->role_id)  selected='selected' @endif    @endforeach>{{$role->name}}
                </option>                

                @endforeach

              </select>

              <div class="invalid-feedback">Debe seleccionar estatus.</div>
            </div>

            <div class="col-12">  
             <div class="row flex-between-center">
             <div class="col-auto"><button class="btn btn-primary">Guardar</button></div>
             <div class="col-auto"><a class="fs--1 font-sans-serif" href={{route("register.search")}}>Cerrar</a></div>
             </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection