<?php
include ('../backend/database/bd.php');
session_start();

// Verificar si los datos existen en la sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ./index.php");
    exit();
}

$datos = $_SESSION['usuario'];

// Fetch projects from database
$sql = "SELECT * FROM trabajos";
$result = $conexion->query($sql);

// Handle errors
if (!$result) {
    die("Error en la consulta a la base de datos: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bienvenido a mi portafolio de programación, donde podrás ver mis proyectos y habilidades en el desarrollo web, software y aplicaciones móviles. Descubre cómo he resuelto problemas de programación y cómo he utilizado las tecnologías más actuales para crear soluciones innovadoras.">
    <meta name="keywords"
        content="C, C++, HTML5, CSS3, SASS, JavaScript, Node.js, Express, React.js, Python, MySQL, MongoDB, PHP, Visual Basic, JSON, programación, desarrollo web, desarrollo de software, aplicaciones móviles, proyectos de programación">
    <link rel="stylesheet" href="../css/stylessss.css">
    <link rel="icon" href="../imgs/favicon.ico">
    <title>Admin</title>
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
            <a href="trabajos.php">Portafolio</a>
            <a href="contacto.php">Contacto</a>
            <?php include ('../components/btnUsers.php'); ?>
        </nav>
    </header>

    <main class="main_contact">
        <section class="main_contact--section main__content--section-admin">
            <div class="main_contact--div">
                <h2 class="heading scale">
                    Agregar
                    <span>repositorio!</span>
                </h2>
                <h2 class="heading">
                    Actualizar
                    <span>repositorio!</span>
                </h2>
                <h2 class="heading">
                    Eliminar
                    <span>repositorio!</span>
                </h2>
            </div>
        </section>

        <!-- Aggregate Form -->
        <section class="main_contact--section" id="aggregate">
            <form action="../backend/api/upload.php" method="post" enctype="multipart/form-data">
                <div class="main--input_box">
                    <input type="text" name="nombreProyecto" placeholder="Nombre proyecto" required />
                    <select id="elementos" name="elemento">
                        <option value="html5">HTML5</option>
                        <option value="sass">SASS</option>
                        <option value="js">JavaScript</option>
                        <option value="nodejs">Node.js</option>
                        <option value="mongodb">MongoDB</option>
                        <option value="json">JSON</option>
                        <option value="php">PHP</option>
                        <option value="mysql">MySQL</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                        <option value="visual">Visual Basic</option>
                        <option value="net">.NET</option>
                        <option value="c#">C#</option>
                    </select>
                </div>
                <input type="text" id="resultado" name="resultado" placeholder="Resultado">
                <input type="repositorio" name="repoGithub" placeholder="Repositorio Github">
                <div class="main--h3_box">
                    <h3 class="heading2">Usar link</h3>
                    <h3 class="heading2">Usar Video</h3>
                </div>
                <div class="main--input_box_long hide" id="video">
                    <input type="file" id="archivo" name="archivo">
                </div>
                <div class="main--input_box_long hide" id="link">
                    <input type="text" name="link" placeholder="Poner link">
                </div>
                <textarea name="mensaje" cols="30" rows="10" placeholder="Tu mensaje"></textarea>
                <input type="submit" name="btnAgreggate" value="Enviar mensaje" class="main--btn_submit" />
            </form>
        </section>

        <!-- Update Form -->
        <section class="main_contact--section hide" id="update">
            <form action="../backend/api/update.php" method="post" enctype="multipart/form-data">
                <select id="repositoriosUpdate">
                    <?php
                    // Reset the pointer to the first element in the result set
                    $result->data_seek(0);

                    // Fetch projects again for update select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '-' . $row['nombre'] . '-' . $row['descripcion'] . '-' . $row['repositorio'] . '-' . $row['link'] . '-' . $row['nombreArchivo'] . '-' . $row['stacks'] . '">' . $row['nombre'] . '</option>';
                    }
                    ?>
                </select>
                <div class="main--input_box">
                    <input type="text" id="nombreUpdate" name="nombreProyecto" placeholder="Nombre proyecto" required />
                    <select id="elementos" name="elemento">
                        <option value="html5">HTML5</option>
                        <option value="sass">SASS</option>
                        <option value="js">JavaScript</option>
                        <option value="nodejs">Node.js</option>
                        <option value="mongodb">MongoDB</option>
                        <option value="json">JSON</option>
                        <option value="php">PHP</option>
                        <option value="mysql">MySQL</option>
                        <option value="c++">C++</option>
                        <option value="python">Python</option>
                        <option value="visual">Visual Basic</option>
                        <option value="net">.NET</option>
                        <option value="c#">C#</option>
                    </select>
                </div>
                <input type="text" id="stacksUpdate" name="resultado" placeholder="Resultado">
                <input type="repositorio" id="repositorioUpdate" name="repoGithub" placeholder="Repositorio Github">
                <input type="text" id="idProyecto" name="idProyectoName">
                <div class="main--input_box_long hide" id="videoUpdate">
                    <input type="file" id="archivo" name="archivo">
                    <input type="text" id="archivoViejoId" name="archivoViejo">
                </div>
                <div class="main--input_box_long hide" id="linkUpdate">
                    <input type="text" id="linkupdate" name="link" placeholder="Poner link">
                </div>
                <textarea name="mensaje" id="mensajeUpdate" cols="30" rows="10" placeholder="Tu mensaje"></textarea>
                <input type="submit" name="btnUpdate" value="Enviar mensaje" class="main--btn_submit" />
            </form>
        </section>

        <!-- Delete Form -->
        <section class="main_contact--section hide" id="delete">
            <form action="../backend/api/delete.php" method="post" enctype="multipart/form-data">
                <select id="repositoriosDelete">
                    <option value="">Seleccione un elemento</option>
                    <?php
                    // Reset the pointer to the first element in the result set
                    $result->data_seek(0);

                    // Fetch projects again for delete select
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . ',' . $row['nombreArchivo'] . '">' . $row['nombre'] . '</option>';
                    }
                    ?>
                </select>
                <input type="text" id="idDelete" name="idDeleteName">
                <input type="text" id="archivoBD" name="archivoNameBD">
                <input type="submit" name="btnDelete" value="Borrar pryecto" class="main--btn_submit" />
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>Copyright &copy; Rodrigo Arias 2023. Todos los derechos reservados.</p>
    </footer>
    <script src="../Js/header.js"></script>
    <script src="../Js/apisss.js"></script>
    <script src="https://kit.fontawesome.com/4989dcb279.js" crossorigin="anonymous"></script>
</body>

</html>