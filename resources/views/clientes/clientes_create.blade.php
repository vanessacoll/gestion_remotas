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
      <h1 > <small>Registro de clientes</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row justify-content-center">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Cliente</h3>
            </div>
            <!-- /.box-header -->
  <form method="GET" action="{{route("clientes.store")}}">
                @csrf
            <!-- form start -->
          <div class="box-body">
          <div class="row">

          <div class="col-md-6">
          <div class="form-group">
                  <label>Cedula o RIF</label>
                  <input required autocomplete="off" name="cedula" class="form-control" placeholder="Cedula o RIF..." >

                  
          </div>
          </div>
           <div class="col-md-10">
                  @error('cedula')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
            </div>
          </div>   
          </div>  

          <div class="box-body">
          <div class="row">
          <div class="col-md-12">
           <div class="form-group">
                  <label>Nombres</label>
                  <input required autocomplete="off" name="nombre" class="form-control" placeholder="Nombres ...">

                  @error('nombre')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>
           <div class="form-group">
                  <label>Dirección</label>
                  <textarea required autocomplete="off" name="direccion" class="form-control" placeholder="Direccion ..."></textarea> 

                  @error('direccion')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>

           <div class="form-group">
                  <label>Telefono</label>
                  <input required autocomplete="off" name="telefono" class="form-control" data-inputmask='"mask": "(9999)999-9999"' data-mask placeholder="Telefono ...">

                  @error('telefono')
                <span  class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
                  @enderror
           </div>  

           <div class="form-group">
                  <label>Email</label>
                  <input required autocomplete="off" name="email" class="form-control" placeholder="Email ...">

                  @error('email')
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
            <div class="col-md-6">
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
             
              <div class="form-group">
                <label>Tipo de Cliente</label>
     <select required name="id_tipcli"class="form-control select2" style="width: 100%;">
                   <option value="">Seleccione</option>
                @foreach($tip_clientes as $tip_cliente)
                   <option value="{{$tip_cliente->id_tip}}">  {{$tip_cliente->des_tip}}</option>
                @endforeach
     </select>
              </div> 

              </div>
              </div>   
              </div> 
            <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{route("clientes.index")}}">Cerrar</a>
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