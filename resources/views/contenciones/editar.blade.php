@extends('home')

@section('encabezado')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Contenciones</h1>
  <p class="lead">Editar Contención</p>
</div>
@endsection

@section('contenido')
<form method="POST" action="{{url("contenciones/{$contencion->id_contencion}")}}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <br>
    <label for="descripcion">Descripción:</label>
    <textarea class="form-control" rows="3" name="descripcion" id="descripcion">{{old('des_contencion',$contencion->des_contencion)}}</textarea>
    <br>
    <div class="text-center">
        <button class="btn btn-outline-primary" type="submit">Actualizar</button>
    </div>

</form>
@endsection