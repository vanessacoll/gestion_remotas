<!DOCTYPE html>
<html>
 <!-- inicio head-->
  @include("themes/$theme/head")
  <!-- fin head-->

<body class="hold-transition skin-blue layout-top-nav" onload="window.print();">
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <!-- Main content -->
     <section class="invoice" >
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">


   <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <i > <img src="{{asset("assets/$theme/dist/img/PhonettMail.png")}}" class="logo_lg" alt="phonnet Image"></i> 
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
          <p class="lead"  style="text-align:center;" ><b>Phonett INC</b></p>
          <p class="lead"  style="text-align:center;" ><b>LISTADO DE ESTACIONES POR {{$tip_clientes->des_tip}}</b></p>
        
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        
         <small><p class="pull-right"  > RP-AD-002-V2  </p></small><br>
         <small><p class="pull-right"  > {{ date('Y-m-d H:i:s') }} </p></small><br>
        
             
      </div>
      <!-- /.col -->
    </div>
         

          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->

     <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
         <table class="table table-bordered-es table-striped">
             <thead>
                <tr>
                   <th>Cliente</th>
                    <th>Serial</th>
                    <th>Modelo modem</th>
                    <th>Dirección</th>
                    <th>Plan</th>
                    <th>Contención</th>
                    <th>Satelite</th>
                    <th>Estatus Cliente</th>
                   
                    </tr>
                </thead>
                <tbody>
                
           @foreach($clientes as $cliente)
                    @foreach($remotas as $remota)
                     @foreach($planes as $plan)
                      @foreach($contenciones as $contencion)
                       @foreach($satelites as $satelite)
                        @foreach($statuss as $status)
                    <tr>
                      @if( $cliente->id_cliente === $remota->id_cliente)
                      @if( $plan->id_plan === $remota->id_plan)
                      @if( $contencion->id_contencion === $remota->id_contencion)
                      @if( $satelite->id_satelite === $remota->id_satelite)
                      @if( $status->id_status === $cliente->id_status) 
                        <td>{{$cliente->cedula}} - {{$cliente->nombres}}</td> 
                        <td>{{$remota->serial}}</td>
                        <td>{{$remota->modmodem}}</td>
                        <td>{{$remota->direccion}}</td>
                        <td>{{$plan->des_plan}}</td>
                        <td>{{$contencion->des_contencion}}</td>
                        <td>{{$satelite->des_satelite}}</td>
                        <td>{{$status->des_status}}</td>
                      @endif
                      @endif
                      @endif
                      @endif  
                      @endif                      
                    </tr>
                     @endforeach 
                    @endforeach   
                   @endforeach   
                  @endforeach   
                 @endforeach   
                @endforeach
                </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->


  
 
</div>
<!-- ./wrapper -->

<!-- inicio jQuery 3 -->
  @include("themes/$theme/jquery")
<!-- fin jQuery 3 -->
</body>
</html>
