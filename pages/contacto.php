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
    <link rel="stylesheet" href="../css/stylessss.css" />

    <link rel="icon" href="../imgs/favicon.ico" />

    <title>Sombre mi</title>
  </head>
  <body>
    <header class="header">
      <a href="../index.php" class="header--logo">Mi Portafolio</a>
      <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
      </svg>
      <nav class="header--navbar">
        <a href="../index.php">Inicio</a>
        <a href="sobre-mi.php">Sobre mi</a>
        <a href="habilidades.php">Habilidades</a>
        <a href="trabajos.html">Portafolio</a>
        <a href="#" class="header--item-active">Contacto</a>
        <?php include('../components/btnUsers.php') ?>
      </nav>
    </header>
    <main class="main_contact">
      <section class="main_contact--section" id="contact">
        <h2 class="heading">
          Contacta
          <span>Conmigo!</span>
        </h2>
        <form action="#">
          <div class="main--input_box">
            <input type="text" placeholder="Nombre completo" />
            <input type="email" placeholder="Correo electronico" />
          </div>
          <div class="main--input_box">
            <input type="number" placeholder="Numero telefonico" />
            <input type="text" placeholder="Asunto del correo" />
          </div>
          <textarea cols="30" rows="10" placeholder="Tu mensaje"></textarea>
          <input type="submit" value="Enviar mensaje" class="main--btn_submit" />
        </form>
      </section>
    </main>
    <footer class="footer">
      <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
    </footer>
    <script src="../Js/header.js"></script>
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
  </body>
</html>
