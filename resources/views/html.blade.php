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
    <section>
    <h2 style="text-align: center; font-size: 2.5em;">¿Qué es?</h2>
</section>
<section>
    <p>
HTML (Lenguaje de Marcas de Hipertexto, del inglés HyperText Markup Language) es el componente más básico de la Web. Define el significado y la estructura del contenido web. Además de HTML, generalmente se utilizan otras tecnologías para describir la apariencia/presentación de una página web (CSS) o la funcionalidad/comportamiento (JavaScript). "Hipertexto" hace referencia a los enlaces que conectan páginas web entre sí, ya sea dentro de un único sitio web o entre sitios web. Los enlaces son un aspecto fundamental de la Web. Al subir contenido a Internet y vincularlo a las páginas creadas por otras personas, te conviertes en un participante activo en la «World Wide Web» (Red Informática Mundial). HTML utiliza "marcas" para etiquetar texto, imágenes y otro contenido para mostrarlo en un navegador Web. Las marcas HTML incluyen elementos especiales como head, title, body, header, footer, article, section, p, div, span, img, aside, audio, canvas, datalist, details, embed, nav, output, progress, video, ul, ol, li y muchos otros. Un elemento HTML se distingue de otro texto en un documento mediante "etiquetas", que consisten en el nombre del elemento rodeado por "<" y ">". El nombre de un elemento dentro de una etiqueta no distingue entre mayúsculas y minúsculas. Es decir, se puede escribir en mayúsculas, minúsculas o una mezcla. Por ejemplo, la etiqueta title se puede escribir como Title, TITLE o de cualquier otra forma. Los siguientes artículos pueden ayudarte a obtener más información sobre HTML.
</p>
</section>
  

    

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2mWw4v084HGRQwxfx1F0I_tSO3NnH1v1jg&s" alt="Descripción de la imagen">

  
  </main>

  <footer>
    <p>&copy; 2025 - Desarrollado por Shyper</p>
  </footer>
</body>
</html>
