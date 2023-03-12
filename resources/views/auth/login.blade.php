@extends('themes.login.login_template')

@section('form')

<form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="illustration">
    <img src="{{ asset('/assets/images/logo.png') }}" alt="" style="height: 100px">
  </div>
  <div class="form-group">
    <input class="form-control" type="text" id="username" name="username" placeholder="Usuario">
  </div>
  <div class="form-group">
    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">Iniciar Sesion</button>
  </div>
</form>

@endsection

