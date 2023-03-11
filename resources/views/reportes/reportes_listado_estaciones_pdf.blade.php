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
          <p class="lead"  style="text-align:center;" ><b>LISTADO DE ESTACIONES</b></p>
        
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        
         <small><p class="pull-right"  > RP-AD-001-V1  </p></small><br>
         <small><p class="pull-right"  > {{ date('Y-m-d H:i:s') }} </p></small><br>
        
             
      </div>
      <!-- /.col -->
    </div>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered-es table-striped">
             <thead>
                <tr>
                   
                    <th>Serial</th>
                    <th>Modelo modem</th>
                    <th>Localidad</th>
                    <th>Dirección</th>
                    <th>Coordenadas</th>
                    <th>Antena</th>
                    <th>Tipo de antena</th>
                    <th>BUC (Transmisor)</th>
                    <th>LNB (Receptor)</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($remotas as $remota)
                    
                    <tr>
                     
                        <td>{{$remota->serial}}</td>
                        <td>{{$remota->modmodem}}</td>
                        <td>{{$remota->localidad}}</td>
                        <td>{{$remota->direccion}}</td>
                        <td>{{$remota->coordenadas}}</td>
                        <td>{{$remota->antena}}</td>
                        <td>{{$remota->tip_antena}}</td>
                        <td>{{$remota->buc}}</td>
                        <td>{{$remota->lnb}}</td>
                                               
                    </tr>
                      
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
