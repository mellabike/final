@extends('maestra')

@section('seccion')
  <div class="col-md-8">
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
  </div>
  <form action="{{ route('home.email') }}" method="POST">
    @csrf
    <br><br>
    <div class="form-group">
      <label for="exampleInputEmail1">Dirección de correo electronico</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Eliga opción</label>
      <select class="form-control" id="exampleFormControlSelect1" name="opcion">
        <option>...</option>
        <option>Felicitaciones</option>
        <option>Reclamos</option>
        <option>Publicidad</option>
        <option>Trabaja con nosotros</option>
        <option>Otros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Ingrese su Consulta</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="consulta" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <br><br>

@endsection
