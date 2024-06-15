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
        <a href="#" class="header--item-active">Sobre mi</a>
        <a href="habilidades.php">Habilidades</a>
        <a href="trabajos.php">Portafolio</a>
        <a href="contacto.php">Contacto</a>
        <?php include('../components/btnUsers.php') ?>
      </nav>
    </header>

    <main class="main--sobre_mi">
      <div class="main--div hidden">
        <section class="main--img_yo">
          <img class="lazy" data-src="../imgs/programadorbarba.webp" alt="Programador programando" width="100%" height="100%" />
        </section>
        <section class="main--content">
          <h1 class="main--h1_cross">
            Acerca de
            <span id="main--span-text">Mi</span>
          </h1>
          <h4>Full stack developer!</h4>
          <p class="main--parrafo">
            ¡Hola! Soy Rodrigo, un programador apasionado con más de 6 años de experiencia en el mundo del desarrollo. Nacido y criado en Argentina, estudié en una escuela técnica
            donde aprendí los fundamentos de la programación y desarrollé mi amor por la tecnología. Desde entonces, he estado construyendo y mejorando mis habilidades en el campo
            de la programación, trabajando en varios proyectos y desafiándome a mí mismo para crear soluciones innovadoras. He trabajado en diferentes proyectos, desde aplicaciones
            web y móviles hasta soluciones empresariales personalizadas.
          </p>
          <a href="#titulo" class="main--btn">Leer mas</a>
        </section>
      </div>
      <div class="main--div hidden" id="titulo">
        <section class="main--img_titulo">
          <img class="lazy" data-src="../imgs/titulo.webp" alt="Mi titulo" />
        </section>
        <section class="main--content">
          <h1 class="main--h1_cross">
            Mi
            <span id="main--span-text">Educacion</span>
          </h1>
          <h4>Full stack developer!</h4>
          <p class="main--p_education">
            Mi trayectoria educativa ha sido muy satisfactoria y estoy orgulloso de los logros que he alcanzado. Desde que comencé a estudiar, siempre tuve una gran pasión por la
            tecnología y la programación. Por esta razón, decidí estudiar en la Escuela Técnica 3 Nikolas Tesla, una institución altamente reconocida y rigurosa. Me gradué como la
            tercer persona con el promedio más alto de toda mi tecnicatura, lo cual fue un logro muy significativo para mí. Durante mi tiempo en la escuela, aprendí los fundamentos
            de la programación tanto del lado del front-end como del back-end, lo que me permitió desarrollar habilidades sólidas y versátiles en programación. Posteriormente,
            realicé
          </p>
          <span class="hide" id="hideText">
            un curso intensivo en Coderhouse, en el que me recibí como desarrollador Full Stack. Este curso me permitió adquirir habilidades avanzadas en diseño web y desarrollo de
            aplicaciones, además de trabajar en proyectos prácticos en equipo. Esto me enseñó habilidades importantes de trabajo en equipo y colaboración, que son esenciales para
            el éxito en el campo de la tecnología. En resumen, estoy muy satisfecho con mi trayectoria educativa y siento que he adquirido habilidades valiosas que me permitirán
            desarrollarme en el campo de la tecnología y la programación en el futuro. Estoy emocionado de ver dónde me llevará esta pasión en el futuro y estoy listo para
            enfrentar nuevos desafíos y seguir aprendiendo.
          </span>
          <button class="main--btn_read" id="hideText_btn">Leer mas</button>
        </section>
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
    <script src="../Js/readMore.js"></script>
  </body>
</html>
