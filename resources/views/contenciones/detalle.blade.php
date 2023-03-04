
@section('encabezado')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Contenciones</h1>
  <p class="lead">Detalle de Contención</p>
</div>
@endsection

@section('contenido')
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4 bg-dark">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$contenciones->des_contencion}}</h5>
            <p class="card-text"></p>
            <p class="card-text"><small class="text-muted">Contención de Operación de Plan</small></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="text-center">
        <a class="btn btn-outline-primary btn-sm" href="{{route('contenciones.index')}}" role="button">Volver</a>
    </div>
@endsection
