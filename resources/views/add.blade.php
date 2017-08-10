@extends('layouts.hello') @section('content')
<form>
  <div class="form-group col-md-6">
    <label for="inputEmail">Nombre</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword">Precio</label>
    <input type="text" class="form-control">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword">Precio</label>
    <input type="tex-area" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection
