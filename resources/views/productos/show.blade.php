<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
  <title>AbastCam</title>

  <style>
  .i{display: none;}
  .i{font-size: 3em;}
  a:not(last-child){
    margin-right: 0.2em;
  }
  </style>

</head>
<body>
  <!-- aca va  la barra de navegacion-->
  <div><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('inicio') }}">AbastCam
      <img src="img/Logo.png" width="80" height="50">
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('quienes')}}">Contactenos <span class="sr-only">(current)</span></a>
        </li>
        &nbsp;&nbsp;
        <li class="nav-item active">
          <a class="nav-link" href="{{route('politicas')}}">Politicas <span class="sr-only">(current)</span></a>
        </li>
      </ul>

      @include('navbar.navbar')

    </form>
  </div>
</nav></div>
<br><br>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        @if(session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <div class="offset-md-2">
          <form action="{{ route('producto.show') }}" method="GET" class="form-inline" id="buscador">
            <div class="form-group mb-2">
              <label for="busqueda">Busque por Titulo</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" id="busqueda" class="form-control" placeholder="buscar">
            </div>
            <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
          </form>
        </div>
        <hr>


        {{-- Se recorre la variable productos donde ahi se encuentra la imagen y la mostramos mediante esa ruta --}}
        <div class="row">
          @foreach ($productos as $producto)
          <div class="col-xs-10  col-sm-4">
              <div class="card-header">
              <h4>{{ $producto->nombre }}</h4>
              <div class="offset-md-10" style="margin-top: -32px;">
                <a href="{{ route('producto.detalle', ['id' => $producto->id]) }}">Ver</a>
              </div>
            </div>
              <img src="{{ route('image.file',['filename' => $producto->foto]) }}" alt="Picture" style="width:100%;">
            </div><br>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>  
  {{$productos->links()}}  
<br><br>


<!-- aca va el footer -->
<div><div class="card">
  <div class="card-header card-dark bg-dark">
    <font color="white">AbastCam</font>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Que es AbastCam</h5>
          <p class="card-text">AbastCam es un sitio destinado al comercio electrónico de accesorios y repuetso para maquinaria pesada.
            fundado en  Marzo del 2019 por:<p>Marcela Paz Cepeda<br>Francisco Mella
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="{{route('quienes')}}" class="btn btn-primary">Contactenos</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Redes Sociales</h5>
              <div class=".i">
              <a class="ion-social-facebook" href="http://www.facebook.com">&nbsp;&nbsp;<span class="hidden">Facebook</span></a>
              <br><br>
              <a class="ion-social-twitter" href="http://www.twitter.com">&nbsp;&nbsp;<span class="hidden">Twitter</span></a>
              <br><br>
              <a class="ion-social-youtube" href="http://www.youtube.com">&nbsp;&nbsp;<span class="hidden">YouTube</span></a>
              <br><br>

            </div>
          </div>
        </div>
      </div>
    </div></div>
</body>
</html>

<script>
//buscador
$('#buscador').submit(function(){
  //http://127.0.0.1:8000/producto/
  var url = 'http://127.0.0.1:8000/producto/';
  $(this).attr('action',url+'todos/' + $('#buscador #busqueda').val());
  //$(this).submit();

});
</script>

