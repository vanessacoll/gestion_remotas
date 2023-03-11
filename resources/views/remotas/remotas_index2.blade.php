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
      <h1 > <small>Informacion del Cliente</small></h1>
    </section>
    
 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">
 <div class="row justify-content-center">
       <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Buscar remotas</h3>
            </div>

   <form method="GET" action="{{route("remotas.searchlis",['request' => "cedula"])}}">
               @csrf

            <!-- form start -->
           
          <div class="box-body">
          <div class="row">
          <div class="col-md-12">
           <div class="form-group">
                  <label>Cliente</label>
             <select required name="cedula" class="form-control select2" style="width: 100%;">
                  <option value="">Seleccione</option>
               @foreach($clientes as $cliente)
                  <option value="{{$cliente->cedula}}">  {{$cliente->cedula}} - {{$cliente->nombres}} </option>
              @endforeach
           </select>
           </div>
           </div>
           </div>   
           </div> 
            
            
              <div class="box-footer">
                <button class="btn btn-primary">Buscar</button>
                <a class="btn btn-primary" href="{{route("home")}}">Cerrar</a>
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