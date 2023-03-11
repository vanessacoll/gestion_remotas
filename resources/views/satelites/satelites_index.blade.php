
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
      <h1 > <small>Listado de Satelites</small></h1>
    </section>

 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">

       <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de satelites</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" >

           <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Azimuth</th>
                    <th>Elevación</th>
                    <th>Polarizador</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach($satelites as $satelite)
                    <tr>
                        <td>{{$satelite->id_satelite}}</td>
                        <td>{{$satelite->des_satelite}}</td>
                        <td>{{$satelite->ubicacion_azi}}</td>
                        <td>{{$satelite->ubicacion_ele}}</td>
                        <td>{{$satelite->ubicacion_pol}}</td>
                        <td>
                          @can('editar_satelites')
                            <a class="btn btn-warning" href="{{route("satelites.edit",['satelite' => $satelite->id_satelite])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                          @else
                            <a class="btn btn-warning" href="#" disabled>
                                <i class="fa fa-edit"></i>
                            </a>
                          @endcan
                        </td>
                        <td>
                          @can('borrar_satelites')
                           <form action="{{route("satelites.destroy", ['satelite' => $satelite->id_satelite])}}" method="get">
                              @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                          @else
                             <a class="btn btn-danger" href="#" disabled></a>
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
              @can('registrar_satelites')
              <a href="{{route("satelites.create")}}" class="btn btn-primary">Agregar</a>
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

</div>
<!-- ./wrapper -->

<!-- inicio jQuery 3 -->
  @include("themes/$theme/jquery")
<!-- fin jQuery 3 -->

</body>
</html>