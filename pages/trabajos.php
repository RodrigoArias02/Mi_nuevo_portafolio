<?php
include ('../backend/database/bd.php');
function verificar($stacks)
{
  $iconos = [
    'c-plus-plus' => '<i class="bx bxl-c-plus-plus"></i>',
    'python' => '<i class="bx bxl-python"></i>',
    'visual-studio' => '<i class="bx bxl-visual-studio"></i>',
    'c#' => '<i class="bx bxs-copyright"></i>',
    'php' => '<i class="bx bxl-php"></i>',
    'sass' => '<i class="bx bxl-sass"></i>',
    'js' => '<i class="bx bxl-javascript"></i>',
    'mysql' => '<i class="bx bxs-data"></i>',
    'html5' => '<i class="bx bxl-html5"></i>',
    'nodejs' => '<i class="bx bxl-nodejs"></i>',
    'mongodb' => '<i class="bx bxl-mongodb"></i>',
    'json' => '<i class="bx bxs-file-json"></i>'
  ];
  if (isset($iconos[$stacks])) {
    return $iconos[$stacks];
  } else {
    return "No hay icono para " . $stacks;
  }
}
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Bienvenido a mi portafolio de programación, donde podrás ver mis proyectos y habilidades en el desarrollo web, software y aplicaciones móviles. Descubre cómo he resuelto problemas de programación y cómo he utilizado las tecnologías más actuales para crear soluciones innovadoras." />
  <meta name="keywords"
    content="C, C++, HTML5, CSS3, SASS, JavaScript, Node.js, Express, React.js, Python, MySQL, MongoDB, PHP, Visual Basic, JSON, programación, desarrollo web, desarrollo de software, aplicaciones móviles, proyectos de programación" />
  <link rel="stylesheet" href="../css/stylesss.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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
      <a href="#" class="header--item-active">Portafolio</a>
      <a href="contacto.php">Contacto</a>
      <?php include ('../components/btnUsers.php') ?>
    </nav>
  </header>
  <main class="main_t">
    <?php
    // Supongo que ya tienes una conexión establecida en $conexion
    $sql = "SELECT * FROM trabajos";
    $result = mysqli_query($conexion, $sql);

    // Verifica si la consulta se ejecutó correctamente
    if ($result) {
      // Recorre todas las filas devueltas por la consulta
      while ($row = mysqli_fetch_assoc($result)) {
        // Recorre cada columna de la fila actual
        $etiquetaIconos = [];
        $stacksString = $row['stacks'];
        $stacksArray = explode(", ", $stacksString);
        $countArray = count($stacksArray);
        $link = !empty($row['link']) ? $row['link'] : "../backend/uploads/" . $row['nombreArchivo'];

        for ($i = 0; $i < $countArray; $i++) {

          $resultado = verificar($stacksArray[$i]);
          array_push($etiquetaIconos, $resultado);
        }

        $countArrayIconos = count($etiquetaIconos);
        // Imprime el nombre de la columna y su valor
        ?>
        <div class="main--card">
          <span class="card--span">
            <a class="span-icon--github" href="<?php echo $row['repositorio'] ?>">
              <i class="fa-brands fa-github"></i>
            </a>
          </span>
          <i class="bx bx-window"></i>

          <h2><?php echo $row['nombre'] ?></h2>
          <p class="main--card--p"><?php echo $row['descripcion'] ?></p>
          <a href="<?php echo $link; ?>">Ver trabajo</a>

          <section class="main--card_footer">
            <p class="main--card-p_stack">Stacks:</p>
            <article>
              <?php
              for ($i = 0; $i < $countArrayIconos; $i++) {
                echo $etiquetaIconos[$i];
              }
              ?>

            </article>
          </section>
        </div>
        <?php

      }
    } else {
      echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Cierra la conexión (opcional, si no se usa después)
    mysqli_close($conexion);
    ?>
  </main>
  <footer class="footer">
    <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
  </footer>
  <script src="../Js/header.js"></script>
  <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
</body>

</html>