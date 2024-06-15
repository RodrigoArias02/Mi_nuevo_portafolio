<?php
// Ruta absoluta del script actual
$scriptPath = $_SERVER['SCRIPT_FILENAME'];
// Nombre de la carpeta que deseas buscar
$targetFolder = 'pages';
// Verificar si la carpeta 'pages' está en la ruta del script
if (strpos($scriptPath, $targetFolder) !== false) {
  $ruta='.';
  
} else {
  $ruta='./pages';
   
}
if (isset($_SESSION['usuario'])) {

  ?>
  <a href="<?php echo $ruta ?>/admin.php"><i class="fa-regular fa-pen-to-square"></i></a>
  <?php
} else {
  ?>

  <a href="<?php echo $ruta ?>/login.php"><i class="fa-regular fa-user"></i></a>
  <?php
}




?>