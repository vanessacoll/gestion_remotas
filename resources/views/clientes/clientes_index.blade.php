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
       Clientes
      </h1>
      <h1 > <small>Registro y actualización de clientes</small></h1>
    </section>
    
@include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">


<div class="row justify-content-center">
        <div class="col-md-4">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
               <table class="table table-bordered">
                 <tbody>

<div class="col-md-4 ">
  @can('registrar_clientes')
  <a href="{{route("clientes.create")}}" class="btn btn-primary">Agregar</a>
  @else
  <a href="#" class="btn btn-primary" disabled>Agregar</a>
  @endcan
</div>

<div class="col-md-4">
  <a href="{{route("clientes.search")}}" class="btn btn-primary">Buscar</a>
</div>

<div class="col-md-4">
  <a href="{{route("home")}}" class="btn btn-primary">Cerrar</a>
</div>
                </tbody>
            </table>
            </div>
        </div>
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