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
      <h1 > <small>Información de Remotas</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
 <div class="row">
       <!-- left column -->
        <div class="col-md-12">
           <!-- /.box -->
<form method="GET" action="{{route("remotas.searchlis",['request' => "cedula"])}}">
               @csrf
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><b>Información del Cliente</b></a></li>
              <li><a href="#tab_2" data-toggle="tab"><b>Historico de Cambios a Remotas</b></a></li>
                         
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form>
              
        
          <div class="box-body">
            <h4><b>CLIENTE</b></h4>
          <div class="row">
          <div class="col-md-2">
         
                  <label>Cedula</label>
                  <input required value="{{$clientes->cedula}}" autocomplete="off" name="cedula" class="form-control" style="background: #f0f0f0;">
           </div>
           <div class="col-md-6">
                  <label>Nombres y Apellidos</label>
                  <input required value="{{$clientes->nombres}}" autocomplete="off" name="nombres" class="form-control"  disabled>
           </div>

           <div class="col-md-10">
                  <label>Dirección</label>
                  <input required value="{{$clientes->direccion}}" autocomplete="off" name="direccion" class="form-control"  disabled>
           </div> 
   
           <div class="col-md-4">
                  <label>Telefono</label>
                  <input required value="{{$clientes->telefono}}" autocomplete="off" name="telefono" class="form-control" disabled>
           </div>

           <div class="col-md-6">
                  <label>Email</label>
                  <input required value="{{$clientes->email}}" autocomplete="off" name="email" class="form-control" disabled>
           </div>

            <div class="col-md-4">
                  <label>Estatus</label>
                  <input required value="{{$statuss->des_status}}" autocomplete="off" name="des_status" class="form-control" disabled>
           </div>

           <div class="col-md-4">
                  <label>Tipo de Cliente</label>
                  <input required value="{{$tip_clientes->des_tip}}" autocomplete="off" name="des_cliente" class="form-control" disabled>
           </div> 
          
           </div>   
           </div>   


          <div class="box-body">
            <h4><b>REMOTA</b></h4>
          <div class="row">
          <div class="col-md-6">
         
                  <label>Nombre</label>
                  <input required value="{{$remotas->nombre}}"  autocomplete="off" name="nombre" class="form-control" placeholder="Serial ..." disabled>
           </div>
          <div class="col-md-6">
         
                  <label>Serial</label>
                  <input required value="{{$remotas->serial}}"  autocomplete="off" name="serial" class="form-control" placeholder="Serial ..." disabled>
           </div>
           <div class="col-md-6">
                  <label>Modelo Modem</label>
                  <input required value="{{$remotas->modmodem}}" autocomplete="off" name="modmodem" class="form-control" placeholder="Modelo ..." disabled>
           </div>

           <div class="col-md-6">
                  <label>Localidad</label>
                  <input required value="{{$remotas->localidad}}" autocomplete="off" name="localidad" class="form-control" placeholder="Localidad ..." disabled>
           </div>  

           <div class="col-md-6">
                  <label>Dirección IP</label>
                  <input required value="{{$remotas->direccion}}" autocomplete="off" name="direccion" class="form-control" placeholder="Direccion ..." disabled>
           </div> 
   
           <div class="col-md-6">
                  <label>Antena</label>
                  <input required value="{{$remotas->antena}}" autocomplete="off" name="antena" class="form-control" placeholder="Antena ..." disabled>
           </div>

           <div class="col-md-6">
                  <label>Tipo de Antena</label>
                  <input required value="{{$remotas->tip_antena}}" autocomplete="off" name="tip_antena" class="form-control" placeholder="Direccion ..." disabled>
           </div>

            <div class="col-md-6">
                  <label>Coordenadas</label>
                  <input required value="{{$remotas->coordenadas}}" autocomplete="off" name="coordenadas" class="form-control" placeholder="Coordenadas ..." disabled>
           </div>

           <div class="col-md-6">
                  <label>BUC (Transmisor)</label>
                  <input required value="{{$remotas->buc}}" autocomplete="off" name="buc" class="form-control" placeholder="BUC ..." disabled>
           </div> 

           <div class="col-md-6">
                  <label>LNB (Receptor)</label>
                  <input required value="{{$remotas->lnb}}" autocomplete="off" name="lnb" class="form-control" placeholder="LNB ..." disabled>
           </div>

           <div class="col-md-6">
         
                  <label>Estatus</label>
                  <input required value="{{$statuss->des_status}}"  autocomplete="off" name="des_plan" class="form-control" disabled>
           </div>
          
           </div>   
           </div> 
            

            <div class="box-body">
            <h4><b>PLAN</b></h4>
          <div class="row">
          <div class="col-md-6">
         
                  <label>Plan</label>
                  <input required value="{{$planes->des_plan}}"  autocomplete="off" name="des_plan" class="form-control" disabled>
           </div>
                    
           </div>   
           </div> 
            
            <div class="box-body">
            <h4><b>CONTENCIÖN</b></h4>
          <div class="row">
          <div class="col-md-6">
         
                  <label>Contención</label>
                  <input required value="{{$contenciones->des_contencion}}"  autocomplete="off" name="des_contencion" class="form-control" disabled>
           </div>
                    
           </div>   
           </div> 

           <div class="box-body">
            <h4><b>SATELITE</b></h4>
          <div class="row">
          <div class="col-md-6">
         
                  <label>Satelite</label>
                  <input required value="{{$satelites->des_satelite}}"  autocomplete="off" name="des_satelite" class="form-control" disabled>
           </div>
                    
           </div>   
           </div> 
           
    </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

             
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped" style="font-size:70%;">
                <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Dirección</th>
                    <th>Antena</th>
                    <th>BUC</th>
                    <th>LNB</th>
                    <th>Plan</th>
                    <th>Contencion</th>
                    <th>Satelite</th>
                    <th>Status</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    <th>Justificacion</th>
                    
                </thead>
                <tbody>
                @foreach($hisremotas as $hisremota)
                    
                    <tr>
                     
                        <td>{{$hisremota->cliente->nombres}}</td> 
                        <td>{{$hisremota->direccion}}</td>
                        <td>{{$hisremota->antena}}</td>
                        <td>{{$hisremota->buc}}</td>
                        <td>{{$hisremota->lnb}}</td>
                        <td>{{$hisremota->plan->des_plan}}</td>
                        <td>{{$hisremota->contencion->des_contencion}}</td>
                        <td>{{$hisremota->satelite->des_satelite}}</td>
                        <td>{{$hisremota->status->des_status}}</td>
                        <td>{{$hisremota->username}}</td>
                        <td>{{$hisremota->created_at}}</td>
                        <td>{{$hisremota->justificacion->des_just}}</td>

                        
                                           
                  </tr>
                       
              @endforeach
                </tbody>
              </table>
            </div>
         
          
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
             <div class="box-footer">
               
                                <button type="submit" class="btn btn-primary">
                                   Cerrar
                                </button>
                           
                   </div>
         </div>
       </form>
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