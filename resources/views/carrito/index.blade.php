@extends('maestra')
@section('seccion')   
<br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11 offset-md-1">
        <h2 class="text-center">Mis Favoritos<i class="fa fa-shopping-cart" aria-hidden="true"></i></h2><br>
        @if ($carrito->isEmpty())
          <div class="alert alert-warning">
            No tienes productos agregados a tus favoritos<i class="fa fa-frown-o" aria-hidden="true"></i>
          </div>
        @else
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Código</th>
              <th>Precio</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          @foreach ($carrito as $data)
            <tbody>
              <tr>
                <td>{{ $data->nombre }}</td>
                <td>{{ $data->codigo }}</td>
                <td>{{ $data->precio }}</td>
                <td>
                  <form class="" action="{{ route('cart.delete', ['id' => $data->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" title="Eliminar" class="btn btn-link" style="color: black"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                  </form>
                </td>
              </tr>
            </tbody>
          @endforeach
        </table>
        <hr>
        {{-- @php
          dd($total[0]);
        @endphp --}}
        <font size=4>
        <div class="form-group mb-2 text-right">
          <label for="Total"><strong>Total: </strong></label>
          @foreach ($total as $data)
            <label>${{ $data->total }}</label>
          @endforeach
        </div>
        </font>
        <div class="col-md-4 offset-md-11">
          <a href="{{ route('producto.show') }}" class="btn btn-success">Seguir Comprando</a>
        </div>
        @endif
      </div>
    </div>
  </div>
  <br><br>
  @endsection  
