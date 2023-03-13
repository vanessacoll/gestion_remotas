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
       Planes y Servicios
      </h1>
      <h1 > <small>Listado de Planes y Servicios</small></h1>
    </section>

 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Planes</h3>
            </div>
            <!-- /.box-header -->
           
            <div class="box-body">
               <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach($planes as $plan)
                    <tr>
                        <td>{{$plan->id_plan}}</td>
                        <td>{{$plan->des_plan}}</td>
                        <td>
                          @can('editar_planes')
                           <a class="btn btn-warning" href="{{route("planes.edit",['plan' => $plan->id_plan])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                           @else
                            <a class="btn btn-warning" href="#" disabled>
                                <i class="fa fa-edit"></i>
                            @endcan
                        </td>
                        <td>
                           @can('borrar_planes')
                            <form action="{{route("planes.destroy", ['plan' => $plan->id_plan])}}" method="get">
                              @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            @else
                             <a class="btn btn-danger" href="#" disabled>
                                <i class="fa fa-trash"></i>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
               @can('registrar_planes')
              <a href="{{route("planes.create")}}" class="btn btn-primary">Agregar</a>
               @else
              <a href="#" class="btn btn-primary" disabled>Agregar</a>
              @endcan
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

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- inicio jQuery 3 -->
  @include("themes/$theme/jquery")
<!-- fin jQuery 3 -->
</body>
</html>