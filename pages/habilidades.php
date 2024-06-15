<?php
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Bienvenido a mi portafolio de programación, donde podrás ver mis proyectos y habilidades en el desarrollo web, software y aplicaciones móviles. Descubre cómo he resuelto problemas de programación y cómo he utilizado las tecnologías más actuales para crear soluciones innovadoras."
    />
    <meta
      name="keywords"
      content="C, C++, HTML5, CSS3, SASS, JavaScript, Node.js, Express, React.js, Python, MySQL, MongoDB, PHP, Visual Basic, JSON, programación, desarrollo web, desarrollo de software, aplicaciones móviles, proyectos de programación"
    />
    <link rel="stylesheet" href="../css/styless.css" />
    <link rel="icon" href="../imgs/favicon.ico" />

    <title>Sombre mi</title>
  </head>
  <body id="inicio">
    <header class="header">
      <a href="../index.php" class="header--logo">Mi Portafolio</a>
      <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
      </svg>
      <nav class="header--navbar">
        <a href="../index.php">Inicio</a>
        <a href="sobre-mi.php">Sobre mi</a>
        <a href="#" class="header--item-active">Habilidades</a>
        <a href="trabajos.php">Portafolio</a>
        <a href="contacto.php">Contacto</a>
        <?php include('../components/btnUsers.php') ?>
      </nav>
    </header>

    <main class="main--habilidades">
      <div class="main--div hidden">
        <section class="main-section_h1">
          <h1>
            Lenguajes de programación para el desarrollo web
            <span>front-end</span>
          </h1>
        </section>
        <section class="main--section_img">
          <img class="lazy" data-src="../imgs/html1.webp" alt="icono html rojo" />
          <img class="lazy" data-src="../imgs/css.webp" alt="icono css azul" />
          <img class="lazy" data-src="../imgs/js.webp" alt="icono JavaScript amarillo" />
          <img class="lazy" data-src="../imgs/Sass.webp" alt="icono de sass rosado" />
        </section>
        <section>
          <p>
            He aprendido a crear la estructura y contenido de páginas web utilizando HTML. Defino diferentes elementos como encabezados, párrafos, imágenes, enlaces, formularios y
            otros elementos comunes, utilizando etiquetas y atributos de HTML para estructurar y organizar el contenido. Además, con CSS, puedo dar estilo y diseño a las páginas
            web. Defino la apariencia visual de los elementos, como colores, fuentes, tamaños, márgenes, diseños y otros, para hacer que las páginas se vean más atractivas y
            profesionales. Con JavaScript, hago que las páginas web sean más dinámicas e interactivas, manejando eventos, creando efectos visuales, validando formularios y
            realizando otras funciones avanzadas que mejoran la experiencia del usuario. Por último, gracias a SASS, puedo simplificar mi trabajo en CSS, utilizando funciones y
            variables para definir estilos reutilizables, ahorrando tiempo y esfuerzo en el proceso de diseño y desarrollo. En resumen, estos lenguajes de programación web me han
            permitido desarrollar sitios web con códigos limpios, optimizados y con estilo moderno.
          </p>
        </section>

        <a href="trabajos.php" class="main--a_trabajos">Ver trabajos</a>
      </div>

      <div class="main--div hidden" id="titulo">
        <section class="main-section_h1">
          <h1>
            Lenguajes de programación para el desarrollo web
            <span>back-end:</span>
          </h1>
        </section>
        <section class="main--section_img">
          <img class="lazy" data-src="../imgs/nodejs.webp" alt="icono de node verde" />
          <img class="lazy" data-src="../imgs/json.webp" alt="icono de json lila" />
          <img class="lazy" data-src="../imgs/express-js.webp" alt="icono de express negro" />
          <img class="lazy" data-src="../imgs/php.webp" alt="icono de php azul" />
        </section>
        <section>
          <p>
            En mi experiencia, he aprendido mucho acerca de programación web, en particular con Node.js. Me ha enseñado cómo desplegar servidores, codificar asincrónicamente,
            estructurar mi código y manejar eventos en el lado del servidor. También he aprendido cómo utilizar JSON para codificar y decodificar datos, lo que me ha permitido
            compartir información entre diferentes lenguajes de programación. Además, Express ha sido una herramienta muy útil para facilitar la implementación de Node.js, lo que
            me ha permitido desplegar servidores y conectarme con bases de datos NoSQL como MongoDB. Finalmente, también tengo conocimiento en PHP, lo que me ha permitido crear
            inicio de sesiones mediante formularios, conectar a bases de datos y realizar operaciones CRUD como subir, editar y eliminar elementos. En resumen, a través de mi
            experiencia en programación web, he adquirido habilidades valiosas en diferentes herramientas y lenguajes que me permiten crear aplicaciones web dinámicas y efectivas.
          </p>
        </section>
        <a href="trabajos.php" class="main--a_trabajos">Ver trabajos</a>
      </div>

      <div class="main--div hidden" id="titulo">
        <section class="main-section_h1">
          <h1>
            Lenguajes de programación para el desarrollo de
            <span>bases de datos:</span>
          </h1>
        </section>
        <section class="main--section_img">
          <img class="lazy" data-src="../imgs/mysql.webp" alt="icono de mysql" />
          <img class="lazy" data-src="../imgs/mongodb.webp" alt="icono de mongoDB verde" />
        </section>
        <section>
          <p>
            Trabajar con MySQL y MongoDB fue una experiencia gratificante para mí. Durante mi trabajo con ambas bases de datos, aprendí a escribir y ejecutar comandos semánticos
            para crear, editar y eliminar datos en ambas bases de datos, así como a conectarlas con diferentes lenguajes de programación, como PHP, Python y Node.js, utilizando
            módulos específicos. Además, aprendí mucho sobre cómo funcionan las bases de datos y cómo manejar y manipular datos. Me gustó especialmente la semántica de los comandos
            y cómo se pueden adaptar a diferentes tipos de proyectos. Aunque MySQL es un sistema de gestión de bases de datos relacional y MongoDB es una base de datos NoSQL basada
            en documentos, ambas son muy poderosas y ampliamente utilizadas en el desarrollo web. En general, trabajar con MySQL y MongoDB me permitió mejorar mis habilidades en el
            desarrollo web y ampliar mi conocimiento en un área importante de la tecnología de la información.
          </p>
        </section>
        <a href="trabajos.php" class="main--a_trabajos">Ver trabajos</a>
      </div>

      <div class="main--div hidden" id="titulo">
        <section class="main-section_h1">
          <h1>
            Lenguajes de programación para el desarrollo de
            <span>sistemas embebidos:</span>
          </h1>
        </section>
        <section class="main--section_img">
          <img class="lazy" data-src="../imgs/c.webp" alt="icono de C++ azul" />
          <img class="lazy" data-src="../imgs/python.webp" alt="icono de python azul con amarillo" />
          <img class="lazy" data-src="../imgs/letra-c.webp" alt="icono de C azul" />
          <img class="lazy" data-src="../imgs/visualBasic.webp" alt="icono de visual basic lila" />
        </section>
        <section>
          <p>
            Durante mi experiencia como programador, he trabajado con varios lenguajes de programación, entre ellos C, C++, Python y Visual Basic. En cada uno de ellos, he
            aprendido las estructuras básicas de programación, como las condiciones, los bucles, las funciones, entre otras. En cuanto a los tipos de datos, he trabajado con
            enteros, flotantes, caracteres, cadenas de caracteres, booleanos, entre otros. Además, he aprendido sobre la semántica de cada uno de estos tipos de datos, cómo
            manipularlos y almacenarlos. Otro aspecto importante que he aprendido es la importación de bibliotecas y módulos en cada uno de estos lenguajes. En Python, por ejemplo,
            he utilizado bibliotecas como NumPy, Pandas y Matplotlib para el análisis de datos y la visualización. En C++, he utilizado la biblioteca STL para estructuras de datos
            y algoritmos. También he aprendido sobre los operadores lógicos y relacionales, que se utilizan para comparar valores y tomar decisiones en la programación. Además, he
            aprendido a crear y utilizar funciones, que son bloques de código que realizan una tarea específica y se pueden reutilizar en diferentes partes del programa. En
            resumen, mi experiencia en programación me ha permitido aprender muchas habilidades y conceptos en diferentes lenguajes de programación, incluyendo la manipulación de
            datos, el uso de estructuras de control de flujo y la creación y utilización de funciones.
          </p>
        </section>
        <a href="trabajos.php" class="main--a_trabajos">Ver trabajos</a>
      </div>

      <div class="main--div hidden" id="titulo">
        <section class="main-section_h1">
          <h1>
            En
            <span>aprendizaje</span>
          </h1>
        </section>
        <section class="main--section_img">
          <img class="lazy" data-src="../imgs/typescript.webp" alt="icono de typescript azul" />
          <img class="lazy" data-src="../imgs/react.webp" alt="icono de react JS azul" />
        </section>
        <section>
          <p>
            Me interesó aprender TypeScript y React.js por las siguientes razones: mejorar mis habilidades en el desarrollo web, ya que son tecnologías muy populares y en demanda
            en el mercado laboral moderno; facilitar el mantenimiento y depuración de código, especialmente en proyectos grandes o complejos, gracias a que TypeScript agrega una
            capa de tipos de datos y React.js simplifica la construcción de interfaces de usuario; y aprovechar la gran comunidad de desarrolladores y abundantes recursos de
            aprendizaje en línea, como documentación oficial, tutoriales, videos y cursos en línea, lo que facilita el proceso de aprendizaje y brinda apoyo cuando lo necesito. En
            resumen, aprender TypeScript y React.js me permitiría mejorar mis habilidades de desarrollo web, hacer mi trabajo más fácil y eficiente, y unirme a una comunidad en
            línea próspera de desarrolladores.
          </p>
        </section>
        <a href="trabajos.php" class="main--a_trabajos">Ver trabajos</a>
      </div>
    </main>

    <footer class="footer">
      <a href="#inicio" class="footer--btn_up">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1)">
          <path d="m12 3.879-7.061 7.06 2.122 2.122L12 8.121l4.939 4.94 2.122-2.122z"></path>
          <path d="m4.939 17.939 2.122 2.122L12 15.121l4.939 4.94 2.122-2.122L12 10.879z"></path>
        </svg>
      </a>
      <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
    <script src="../Js/renderizadoImg.js"></script>
    <script src="../Js/header.js"></script>
  </body>
</html>
