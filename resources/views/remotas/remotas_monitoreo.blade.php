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
      <h1 > <small>Monitoreo de Remotas</small></h1>
    </section>

 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Remotas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Serial</th>
                    <th>Nombre</th>
                    <th>Dirección IP</th>
                    <th>Plan</th>
                    <th>Contencion</th>
                    <th>Satelite</th>
                    <th>Estatus</th></tr>
                </thead>
                <tbody>
                @foreach($remotas as $remota)
                  
                    <tr>
                       
                        <td>{{$remota->cliente->nombres}}</td> 
                        <td>{{$remota->serial}}</td>
                        <td>{{$remota->nombre}}</td>
                        <td>{{$remota->direccion}}</td>
                        <td>{{$remota->plan->des_plan}}</td>
                        <td>{{$remota->contencion->des_contencion}}</td>
                        <td>{{$remota->satelite->des_satelite}}</td>
                        <td>{{$remota->status->des_status}}</td>
                        
                          
                       </tr>
                       
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

<a class="btn btn-primary" href="{{route("home")}}">Cerrar</a>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<!--inicio footer-->
  @include("themes/$theme/footer")
<!-- fin footer -->

</div>
<!-- ./wrapper -->

<!-- inicio jQuery 3 -->
  @include("themes/$theme/jquery")
<!-- fin jQuery 3 -->
</body>
</html>