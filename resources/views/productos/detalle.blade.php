@extends('maestra')
@section('seccion')   
<br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        {{-- Se recorre la variable productos donde ahi se encuentra la imagen y la mostramos mediante esa ruta --}}
        <div class="card">
          <div class="card-header">
            <h3>{{ $producto->nombre }}</h3>
            @if (Auth::user() && Auth::user()->id == $producto->user_id)
            {{-- ELIMINAR --}}
            <div class="offset-md-11" style="margin-top: -38px; margin-left: 660px;">
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal" style="color: #ac2501;">
                <i class="fa fa-times-circle fa-lg" aria-hidden="true"></i>
              </button>
            </div>

            {{-- EDITAR --}}
            <div class="offset-md-11" style="margin-top: -32px; margin-left: 640px;">
              <a href="{{ route('producto.edit', ['id' => $producto->id]) }}" style="color: #2f62af"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a>
            </div>
          @endif
          </div>
            <img src="{{ route('image.file',['filename' => $producto->foto]) }}" alt="Picture" style="width:100%;">
          </div><br>
        </div>
        <div class="col-4">
          <form action="{{ route('cart.agregar', ['id' => $producto->id]) }}" method="POST">
            @csrf

            <div class="card">
              <div class="card-header text-center">Datos Publicación</div>
              <div class="col-md-12">

                <div class="form-group mb-2">
                  <label for="nombreProducto" style="padding-top: 10px"><strong>Producto: </strong></label>
                  <label for="nombreProducto" style="padding-top: 10px">{{ $producto->nombre }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="nombre"><strong>Descripción: </strong></label>
                  <label for="nombre">{{ $producto->descripcion }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="precio"><strong>Precio: </strong></label>
                  <label for="precio">${{ $producto->precio }}</label>
                </div>

                <hr>

                <div class="form-group mb-2">
                  <label for="nombre"><strong>Vendedor: </strong></label>
                  <label for="nombre">{{ $producto->name }}</label>
                </div>

                {{--  MAS INFO DEL USUARIO
                <div class="form-group mb-2">
                  <label for="rut"><strong>RUT: </strong></label>
                  <label for="rut">{{ $producto->rut }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="rut"><strong>Dirección: </strong></label>
                  <label for="rut">{{ $producto->direccion }}</label>
                </div> --}}

                <div class="form-group mb-2">
                  <label for="rut"><strong>Email: </strong></label>
                  <label for="rut">{{ $producto->email }}</label>
                </div>
              </div>
            </div><br>

            {{-- <div class="col-md-4">
              <label for="cantidad">Cantidad: </label>
              <input type="number" name="cantidad" id="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad') }}" placeholder="0" required>
              @error('cantidad')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div><br> --}}

            <button type="submit" name="button" class="btn btn-primary btn-block">Agregar a favoritos</button>
            <br>
            <div class="col-md-4 offset-md-3">
                <a href="{{ route('producto.show') }}" class="btn btn-success">Volver al Menu</a>
              </div>


          </form>
        </div>
      </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">¿Estás seguro que quieres eliminar esta publicación?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Si la eliminas no podrás revertir los cambios.
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-color" data-dismiss="modal">No, dejame pensarlo</button>
            <a href="{{ route('producto.delete', ['id' => $producto->id]) }}" class="btn btn-danger">Si, estoy seguro</a>
          </div>

        </div>
      </div>
    </div>
    <br><br>
    @endsection  


