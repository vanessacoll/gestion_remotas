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
       Satelites
      </h1>
      <h1 > <small>Actualización de satelites</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
 <div class="row justify-content-center">
       <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Satelite</h3>
            </div>

  <form method="GET" action="{{route("satelites.update",['satelite' => $satelite->id_satelite])}}">
               @method("PUT")
                @csrf

            <!-- form start -->
          <div class="box-body">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                  <label>Id</label>
                  <input required value="{{$satelite->id_satelite}}" autocomplete="off" name="id_satelite" class="form-control" type="text" placeholder="Id..."  disabled>
          </div>
          </div>
          </div>   
          </div>  

          <div class="box-body">
          <div class="row">
          <div class="col-md-12">
           <div class="form-group">
                  <label>Nombre</label>
                  <input required value="{{$satelite->des_satelite}}"  autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre...">

                @error('nombre')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                @enderror
           </div>
           <div class="form-group">
                  <label>Azimuth</label>
                  <input required value="{{$satelite->ubicacion_azi}}"  autocomplete="off" name="ubicacion_azi" class="form-control" placeholder="Ubicacion AZI ...">

                  @error('ubicacion_azi')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Elevación</label>
                  <input required value="{{$satelite->ubicacion_ele}}"  autocomplete="off" name="ubicacion_ele" class="form-control" placeholder="Ubicacion ELE ...">

                  @error('ubicacion_ele')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>  

           <div class="form-group">
                  <label>Polarizador</label>
                  <input required value="{{$satelite->ubicacion_pol}}"  autocomplete="off" name="ubicacion_pol" class="form-control" placeholder="Ubicacion POL ...">

                  @error('ubicacion_pol')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>  

           </div>
           </div>   
           </div> 
            
            
              <div class="box-footer">
                <button class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{route("satelites.index")}}">Cerrar</a>
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