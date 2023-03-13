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
       Usuarios
      </h1>
      <h1 > <small>Listado de usuarios</small></h1>
    </section>

 @include("themes/$theme/message")
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>usuario</th>
                    <th>Nombres</th>
                    <th>Rol</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                @foreach($roles as $rol)
                @foreach($model_has_roles as $model_has_rol)
                    <tr>
                        @if( $user->id === $model_has_rol->model_id && $rol->id === $model_has_rol->role_id)                   
                        <td>{{$user->username}}</td>
                        <td>{{$user->nombres}}</td>
                        <td>{{$rol->name}}</td>
                        <td>
                           
                          @can('editar_usuarios')
                            <a class="btn btn-warning" href="{{route("register.edit",['user' => $user->id])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                          @else
                            <a class="btn btn-warning" href="#" disabled>
                                <i class="fa fa-edit"></i>
                          @endcan
                                           
                        </td>
                        <td>
                          
                            @can('borrar_usuarios')
                           <form action="{{route("register.destroy", ['user' => $user->id])}}" method="get">
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
                       @endif                     
                    </tr>
                    @endforeach
                  @endforeach
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

<a class="btn btn-primary" href="{{route("register.index")}}">Cerrar</a>
    
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

