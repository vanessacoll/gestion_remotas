@extends('home')

@section('encabezado')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Contenciones</h1>
  <p class="lead">Nueva Contención</p>
</div>
@endsection

@section('contenido')
<div class="card">
    <h4 class="card-header">Crear Contención</h4>
    <div class="card-body">
        <form method="post" action="{{url('contenciones')}}">

            {!!csrf_field()!!}

            <br>
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" rows="2" name="descripcion" id="descripcion"></textarea>
            <br>
            <div class="text-center">
                <button class="btn btn-outline-primary" type="submit">Crear</button>
            </div>
        </form>
    </div>
</div>
@endsection
