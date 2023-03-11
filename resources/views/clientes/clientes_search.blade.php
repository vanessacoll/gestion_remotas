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
      <h1 > <small>Listado de Clientes</small></h1>
    </section>

 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Clientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>cedula</th>
                    <th>Nombres</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Estatus</th>
                    <th>Tipo de Cliente</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
               @foreach($clientes as $cliente)
            <tr>
                        <td>{{$cliente->cedula}}</td>
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->status->des_status}}</td>
                        <td>{{$cliente->tip_cliente->des_tip}}</td>
                        <td>
                           @can('editar_clientes')
                          <a class="btn btn-warning" href="{{route("clientes.edit",['cliente' => $cliente->id_cliente])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            @else
                            <a class="btn btn-warning" href="#" disabled>
                                <i class="fa fa-edit"></i>
                            @endcan
                        </td>
                        <td>
                          @can('borrar_clientes')
                            <form action="{{route("clientes.destroy", ['cliente' => $cliente->id_cliente])}}" method="get">
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