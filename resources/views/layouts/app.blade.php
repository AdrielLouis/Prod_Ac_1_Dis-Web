<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mi Sitio Web')</title>
  @vite('resources/css/actividad.css')
</head>
<body>
  <header>
    <h1 class="titulo-principal">Tecnología y Desarrollo Web</h1>
    <nav>
      <ul class="menu">
        <li><a href="{{ route('/home') }}">Inicio</a></li>
        <li><a href="{{ route('/html') }}">HTML5</a></li>
        <li><a href="{{ route('/css') }}">CSS3</a></li>
        <li><a href="{{ route('/contacto') }}">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; 2025 - Desarrollado por Shyper</p>
  </footer>
</body>
</html>
