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
       Planes y servicios
      </h1>
      <h1 > <small>Actualización de planes y servicios</small></h1>
    </section>


    <!-- Main content -->
    <section class="content">
 <div class="row justify-content-center">
       <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Planes</h3>
            </div>

   <form method="GET" action="{{route("planes.update",['plan' => $plan->id_plan])}}">
               @method("PUT")
                @csrf

            <!-- form start -->
          <div class="box-body">
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                  <label>Id</label>
                  <input required value="{{$plan->id_plan}}" autocomplete="off" name="id_plan" class="form-control" type="text" placeholder="Id..."  disabled>
          </div>
          </div>
          </div>   
          </div>  

          <div class="box-body">
          <div class="row">
          <div class="col-md-12">
           <div class="form-group">
                  <label>Nombre</label>
                  <input required value="{{$plan->des_plan}}"  autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">

                  @error('nombre')
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
                <a class="btn btn-primary" href="{{route("planes.index")}}">Cerrar</a>
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