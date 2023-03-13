<!DOCTYPE html>
<html>
 <!-- inicio head-->
  @include("themes/$theme/head")
  <!-- fin head-->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- inicio header-->
  @include("themes/$theme/header")
 <!-- fin header-->

 <!-- inicio aside-->
  @include("themes/$theme/aside")
 <!-- fin aside-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1 >
       Remotas
      </h1>
      <h1 > <small>Actualización de remotas</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Remota</h3>
            </div>
            <!-- /.box-header -->
  <form method="GET" action="{{route("remotas.update",['remota' => $remota->id_remota])}}">
               @method("PUT")
                @csrf
            <!-- form start -->
           <div class="box-body">
           <div class="row">
           <div class="col-md-10">
           <div class="form-group">
                <label>Cliente</label>
     <select name="id_cliente" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
               @foreach($clientes as $cliente)
                  <option value="{{$cliente->id_cliente}}"  @if( $cliente->id_cliente === $remota->id_cliente) selected='selected' @endif >  {{$cliente->cedula}} - {{$cliente->nombres}} </option>
              @endforeach
     </select>
            </div> 
            </div>
            </div>   
            </div>    

          <div class="box-body">
          <div class="row">
          <div class="col-md-12">

            <div class="form-group">
                  <label>Nombre</label>
                  <input required value="{{$remota->nombre}}"  autocomplete="off" name="nombre" class="form-control" placeholder="Nombre ...">

                  @error('nombre')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Serial</label>
                  <input required value="{{$remota->serial}}"  autocomplete="off" name="serial" class="form-control" placeholder="Serial ...">

                  @error('serial')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>
           <div class="form-group">
                  <label>Modelo Modem</label>
                  <input required value="{{$remota->modmodem}}" autocomplete="off" name="modmodem" class="form-control" placeholder="Modelo ...">

                  @error('modmodem')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Localidad</label>
                  <input required value="{{$remota->localidad}}" autocomplete="off" name="localidad" class="form-control" placeholder="Localidad ...">

                  @error('localidad')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>  

           <div class="form-group">
                  <label>Dirección IP</label>
                  <input required value="{{$remota->direccion}}" autocomplete="off" name="direccion" class="form-control" placeholder="Direccion ...">

                  @error('direccion')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div> 

           <div class="form-group">
                  <label>Coordenadas</label>
                  <input required value="{{$remota->coordenadas}}" autocomplete="off" name="coordenadas" class="form-control" placeholder="Coordenadas ...">

                  @error('coordenadas')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Antena</label>
                  <input required value="{{$remota->antena}}" autocomplete="off" name="antena" class="form-control" placeholder="Antena ...">

                  @error('antena')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Tipo de Antena</label>
                  <input required value="{{$remota->tip_antena}}" autocomplete="off" name="tip_antena" class="form-control" placeholder="Direccion ...">

                  @error('tip_antena')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>BUC (Transmisor)</label>
                  <input required value="{{$remota->buc}}" autocomplete="off" name="buc" class="form-control" placeholder="BUC ...">

                  @error('buc')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div> 

           <div class="form-group">
                  <label>LNB (Receptor)</label>
                  <input required value="{{$remota->lnb}}" autocomplete="off" name="lnb" class="form-control" placeholder="LNB ...">

                  @error('lnb')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           </div>
           </div>   
           </div> 
            
            
            <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>Plan</label>
     <select name="id_plan" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
                @foreach($planes as $plan)
                  <option value="{{$plan->id_plan}}" @if( $plan->id_plan === $remota->id_plan) selected='selected' @endif >  {{$plan->des_plan}}
                  </option>
                @endforeach
     </select>
              </div> 
             
              <div class="form-group">
                <label>Contencion</label>
     <select name="id_contencion"class="form-control select2" style="width: 100%;">
                   <option value="">Seleccione</option>
                @foreach($contenciones as $contencion)
                   <option value="{{$contencion->id_contencion}}" @if( $contencion->id_contencion === $remota->id_contencion) selected='selected' @endif >  {{$contencion->des_contencion}}</option>
                @endforeach
     </select>
              </div> 

              <div class="form-group">
                <label>Satelite</label>
     <select name="id_satelite"class="form-control select2" style="width: 100%;">
                 <option value="">Seleccione</option>
                @foreach($satelites as $satelite)
                 <option value="{{$satelite->id_satelite}}" @if( $satelite->id_satelite === $remota->id_satelite) selected='selected' @endif >  {{$satelite->des_satelite}}</option>
                @endforeach
     </select>
              </div> 

              <div class="form-group">
                <label>Estatus</label>
     <select required name="id_status" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
                @foreach($statuss as $status)
                  <option value="{{$status->id_status}}" @if( $remota->id_status === $status->id_status) selected='selected' @endif>  {{$status->des_status}}
                  </option>
                @endforeach
     </select>
              </div>

              </div>
              </div>   
              </div>   

           <div class="box-body">
           <div class="row">
           <div class="col-md-10">
           <div class="form-group">
                <label>Justificacion</label>
     <select required name="id_just" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
               @foreach($justificaciones as $justificacion)
                  <option value="{{$justificacion->id_just}}">  {{$justificacion->des_just}}</option>
              @endforeach
     </select>
            </div> 
            </div>
            </div>   
            </div>    

            <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{route("remotas.search")}}">Cerrar</a>
              </div>

  </form>
    </div>
          <!-- /.box -->
  </div>
    </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<!--inicio footer-->
  @include("themes/$theme/footer")
<!-- fin footer -->

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- inicio jQuery 3 -->
  @include("themes/$theme/jquery")
<!-- fin jQuery 3 -->
</body>
</html>