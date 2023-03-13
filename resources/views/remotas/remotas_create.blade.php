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
      <h1 > <small>Registro de remotas</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva Remota</h3>
            </div>
            <!-- /.box-header -->
  <form method="GET" action="{{route("remotas.store")}}">
                @csrf
            <!-- form start -->
           <div class="box-body">
           <div class="row">
           <div class="col-md-10">
           <div class="form-group">
                <label>Cliente</label>
     <select required name="id_cliente" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
               @foreach($clientes as $cliente)
                  <option value="{{$cliente->id_cliente}}">  {{$cliente->cedula}} - {{$cliente->nombres}} </option>
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
                  <input required autocomplete="off" name="nombre" class="form-control" placeholder="Nombre ...">

                  @error('nombre')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Serial</label>
                  <input required autocomplete="off" name="serial" class="form-control" placeholder="Serial ...">

                  @error('serial')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>
           <div class="form-group">
                  <label>Modelo Modem</label>
                  <input required autocomplete="off" name="modmodem" class="form-control" placeholder="Modelo ...">

                  @error('modmodem')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Localidad</label>
                  <input required autocomplete="off" name="localidad" class="form-control" placeholder="Localidad ...">

                  @error('localidad')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>  

           <div class="form-group">
                  <label>Dirección IP</label>
                  <input required autocomplete="off" name="direccion" class="form-control" placeholder="Direccion ...">

                  @error('direccion')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div> 

           <div class="form-group">
                  <label>Coordenadas</label>
                  <input required autocomplete="off" name="coordenadas" class="form-control" placeholder="Coordenadas ...">

                  @error('coordenadas')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Antena</label>
                  <input required autocomplete="off" name="antena" class="form-control" placeholder="Antena ...">

                  @error('antena')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Tipo de Antena</label>
                  <input required autocomplete="off" name="tip_antena" class="form-control" placeholder="Direccion ...">

                  @error('tip_antena')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>BUC (Transmisor)</label>
                  <input required autocomplete="off" name="buc" class="form-control" placeholder="BUC ...">

                  @error('buc')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div> 

           <div class="form-group">
                  <label>LNB (Receptor)</label>
                  <input required autocomplete="off" name="lnb" class="form-control" placeholder="LNB ...">

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
     <select required name="id_plan" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
                @foreach($planes as $plan)
                  <option value="{{$plan->id_plan}}">  {{$plan->des_plan}}
                  </option>
                @endforeach
     </select>
              </div> 
             
              <div class="form-group">
                <label>Contencion</label>
     <select required name="id_contencion"class="form-control select2" style="width: 100%;">
                   <option value="">Seleccione</option>
                @foreach($contenciones as $contencion)
                   <option value="{{$contencion->id_contencion}}">  {{$contencion->des_contencion}}</option>
                @endforeach
     </select>
              </div> 

              <div class="form-group">
                <label>Satelite</label>
     <select required name="id_satelite"class="form-control select2" style="width: 100%;">
                 <option value="">Seleccione</option>
                @foreach($satelites as $satelite)
                 <option value="{{$satelite->id_satelite}}">  {{$satelite->des_satelite}}</option>
                @endforeach
     </select>
              </div> 

              <div class="form-group">
                <label>Estatus</label>
     <select required name="id_status" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
                @foreach($statuss as $status)
                  <option value="{{$status->id_status}}">  {{$status->des_status}}
                  </option>
                @endforeach
     </select>
              </div> 

              </div>
              </div>   
              </div>   
            <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{route("remotas.index")}}">Cerrar</a>
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