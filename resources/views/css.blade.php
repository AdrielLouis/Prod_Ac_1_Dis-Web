<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto académico N°2</title>
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
      <h2 style="text-align: center; font-size: 2.5em;">¿Qué es CSS3?</h2>
    </section>

    <section>
      <p>
CSS3 (Cascading Style Sheets Level 3) es la evolución de CSS, el lenguaje utilizado para dar estilo y formato a los documentos HTML. Permite controlar el diseño, colores, fuentes, márgenes, rellenos, animaciones y la presentación general de las páginas web de manera mucho más avanzada que sus versiones anteriores. CSS3 está dividido en módulos que facilitan la incorporación de nuevas funcionalidades sin afectar las existentes, como transiciones, transformaciones, animaciones, sombras y gradientes.

Gracias a CSS3, los desarrolladores pueden crear interfaces visualmente atractivas y responsivas, adaptables a distintos dispositivos y tamaños de pantalla, mejorando la experiencia del usuario. Entre sus características destacan los selectores avanzados, la capacidad de importar fuentes externas (web fonts), y propiedades como flexbox y grid para organizar el contenido de manera flexible y eficiente.

CSS3 también permite crear efectos visuales dinámicos sin depender de JavaScript, como animaciones de elementos, cambios de color progresivos, y transiciones suaves. La combinación de HTML5 y CSS3 es fundamental para el desarrollo web moderno, ya que asegura páginas interactivas, accesibles y estéticamente agradables.
      </p>
    </section>

    <section>
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" 
           alt="Logo CSS3" 
           style="display: block; margin: 2em auto; max-width: 100px; border-radius: 10px;">
    </section>

  </main>

  <footer>
    <p>&copy; 2025 - Desarrollado por Shyper</p>
  </footer>
</body>
</html>
