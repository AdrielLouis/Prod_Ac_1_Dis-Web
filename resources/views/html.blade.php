<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto académico N°1 </title>
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
    <h2>PRODUCTO ACADEMICO 1</h2>
    <p>Bienvenido a este sitio web, desarrollado como parte del trabajo práctico individual del consolidado 1. El objetivo de este proyecto es demostrar la aplicación de HTML5 y CSS3 para el maquetado básico de una página web, integrando elementos esenciales como encabezados, párrafos, listas, enlaces e imágenes, así como el uso de hojas de estilo para diseñar una presentación coherente y atractiva. A través de este sitio, se refleja la capacidad de estructurar contenido, aplicar estilos, manejar colores, unidades de medida y efectos visuales, cumpliendo con los objetivos de aprendizaje de la unidad y mostrando un diseño funcional y educativo.</p>
    
    <h3>Lista de temas principales:</h3>
 <ul>
  <li>
    Elementos HTML básicos
    <p class="concepto">Son las etiquetas fundamentales que permiten estructurar contenido en una página web.</p>
  </li>
  <li>
    Texto y Listas
    <p class="concepto">Permiten organizar y dar formato a la información mediante párrafos, listas ordenadas y desordenadas.</p>
  </li>
  <li>
    <a href="{{ route('contacto') }}">Enlaces internos</a>
    <p class="concepto">Permiten navegar entre diferentes secciones o páginas dentro de un mismo sitio web.</p>
  </li>
  <li>
    <a href="https://www.linkedin.com/in/adriel-louis-pillpa-ch%C3%A1vez-102816207/" target="_blank" rel="noopener noreferrer">Enlaces externos</a>
    <p class="concepto">Dirigen al usuario a páginas fuera de tu sitio web.</p>
  </li>
  <li class="led">
    CSS3 y colores
    <p class="concepto">CSS3 permite aplicar estilos visuales, colores y efectos a los elementos de la página.</p>
  </li>
</ul>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2mWw4v084HGRQwxfx1F0I_tSO3NnH1v1jg&s" alt="Descripción de la imagen">

  
  </main>

  <footer>
    <p>&copy; 2025 - Desarrollado por Shyper</p>
  </footer>
</body>
</html>
