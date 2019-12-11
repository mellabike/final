&nbsp;&nbsp;&nbsp;
<!--aqui va el login y el registro-->
@if (Route::has('login'))
  <div class="top-right links">

    @auth
      {{-- si el usuario es admin tendrá estos accesos --}}
      @if (Auth::user()->id_rol == 1)
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('usuarios.show') }}" class="nav-link">Listar Usuarios</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('producto.show') }}" class="nav-link">Ver productos</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('producto.create') }}" class="nav-link">Publicar</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cart.index') }}" class="nav-link">Favoritos</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">Cerrar Sesion</a>
          </li>
        </ul>
      @else
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('producto.show') }}" class="nav-link">Ver productos</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('producto.create') }}" class="nav-link">Publicar</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cart.index') }}" class="nav-link">Favortios</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">Cerrar Sesion</a>
          </li>
        </ul>
      @endif
    @else
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link">Ingresar</a>
        </li>
        @if (Route::has('register'))
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
          </li>
        </ul>
      @endif
    @endauth
  </div>
@endif
