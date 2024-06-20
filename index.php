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
    <link rel="icon" href="imgs/favicon.ico" />
    <link rel="stylesheet" href="css/stylessss.css" />

    <title>Inicio</title>
  </head>
  <body>
    <header class="header">
      <a href="#" class="header--logo">Mi Portafolio</a>
      <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
      </svg>
      <nav class="header--navbar">
        <a href="#" class="header--item-active">Inicio</a>
        <a href="pages/sobre-mi.php">Sobre mi</a>
        <a href="pages/habilidades.php">Habilidades</a>
        <a href="pages/trabajos.php">Portafolio</a>
        <a href="pages/contacto.php">Contacto</a>
        <?php include('./components/btnUsers.php') ?>
      </nav>
    </header>
    <main class="main">
      <section class="main--content">
        <h3>Hola soy</h3>
        <h1>Rodrigo Arias</h1>
        <h3>
          y soy
          <span id="main--span-text"></span>
        </h3>
        <p>
          ¡Bienvenido a mi portafolio! Soy un programador full stack con experiencia en el desarrollo de aplicaciones web y móviles. Con habilidades en el desarrollo de front-end y
          back-end, puedo crear aplicaciones completas desde cero, desde el diseño hasta la implementación.
        </p>
        <article class="main--social-media">
          <a href="index.php">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a href="https://github.com/RodrigoArias02">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.instagram.com/rodrigo_arias213/">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/in/rodrigo-arias-323a39189/">
            <i class="fa-brands fa-linkedin-in"></i>
          </a>
        </article>
        <a href="Curriculum.pdf" class="main--btn">Descargar CV</a>
      </section>
      <section class="main--img">
        <img src="imgs/programadorbarba.webp" alt="Un programador programadon" width="100%" height="100%" />
      </section>
    </main>
    <footer class="footer">
      <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
    </footer>
  </body>
  <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
  <script src="Js/type.js"></script>
  <script src="Js/header.js"></script>
</html>
