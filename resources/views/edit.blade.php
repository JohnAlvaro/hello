@extends('layouts.hello') @section('content')

<div class="container">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->precio}}</td>
        <td>{{$product->description}}</td>
        <td><a href="{{url('edit',$product->id)}}"><button class="btn btn-outline-primary" type="button" name="button">Editar</button></a></td>
        <td><a href="{{url('delete',$product->id)}}"><button class="btn btn-outline-primary" type="button" name="button">Eliminar</button></a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
  {{ $products->links() }}
</div>
<hr>
<!-- Formulario -->
<form action="{{url('update',$pro->id)}}" method="POST">
  {{ csrf_field() }}
  <div class="form-group col-md-4">
    <label for="inputEmail">Nombre</label>
    <input type="text" name="name" class="form-control" value="{{$pro->name}}">
  </div>
  <div class="form-group col-md-4">
    <label for="inputPassword">Precio</label>
    <input type="text" name="precio" class="form-control" value="{{number_format($pro->precio)}}">
  </div>
  <div class="form-group col-md-4">
    <label for="inputPassword">Descripcion</label>
    <input type="tex-area" name="description" class="form-control" value="{{$pro->description}}">
  </div>
  <div class="form-group col-md-6">
    <input class="btn btn-outline-primary" type="submit" name="" value="Editar">
  </div>

</form>


@endsection
