<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  @vite('resources/css/actividad.css')
</head>
<body>
   <header>
    <h1 class="titulo-principal">Desarrollo Web</h1>
    <nav>
      <ul class="menu">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('html') }}">HTML5</a></li>
        <li><a href="{{ route('css') }}">CSS3</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>
      </ul>
    </nav>
  </header>
  

  <main>
  
 <section>
      <h2 style="text-align: center; font-size: 2.5em;">INTEGRANTE</h2>
    </section>
    <div class="integrante">
      <img src="https://media.licdn.com/dms/image/v2/D4E03AQGZmvMWjvQrbw/profile-displayphoto-crop_800_800/B4EZmSG_w4GYAI-/0/1759092932462?e=1762992000&v=beta&t=EjraL30EdipcKdo-FfZmkF-s3v59Z9G6FPsqp-9lyDA" alt="Foto del integrante">
      <h2 class="nombre">Pillpa Chavez Adriel Louis</h2>
      <p class="profesion">Estudiante de Ingeniería de Sistemas</p>
      <div class="redes">
        <a href="https://www.linkedin.com/in/adriel-louis-pillpa-ch%C3%A1vez-102816207/" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn">
        </a>
        <a href="https://www.instagram.com/adrl_shypr/?igsh=MXQ3aWgyNjEzeWU3dw%3D%3D&utm_source=qr#" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
        </a>
      </div>
    </div>
  </main>

  <footer>
    &copy; 2025 - Desarrollado por Adriel Louis Pillpa Chavez
  </footer>
</body>
</html>
