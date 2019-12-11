@extends('maestra')
@section('seccion') 
<br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        {{-- MENSAJE DE EDITADO --}}
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        <div class="card">

          <div class="card-header">Crear Producto</div>

          <div class="card-body">

            <form action="{{ route('producto.save') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                <div class="col-md-6">
                    <input id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required autofocus/>
                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                <div class="col-md-6">
                    <input id="precio" type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}" required autofocus/>
                    @error('precio')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>
                <div class="col-md-6">
                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus/>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="image_path" class="col-md-4 col-form-label text-md-right">Image</label>

                <div class="col-md-6">
                  <div class="custom-file">
                    <input type="file" id="image_path" name="image_path" class="form-control @error('image_path') is-invalid @enderror custom-file-input">
                      @error('image_path')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                  </div>
                </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>
                <div class="col-md-6">
                    <textarea id="description" name="description" class="form-control" required></textarea>
                    @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary btn-block">
                    Publicar
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  @endsection  

