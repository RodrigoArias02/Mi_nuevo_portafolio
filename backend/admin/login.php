<?php
$email = $_POST['email'];
$contraseña = $_POST['password'];

// Ruta al archivo JSON
$rutaArchivo = 'user.json';

// Leer el contenido del archivo JSON
$contenidoJson = file_get_contents($rutaArchivo);

// Decodificar el JSON
$datos = json_decode($contenidoJson, true); // true para obtener un array asociativo

// Verificar si la decodificación fue exitosa
if ($datos === null && json_last_error() !== JSON_ERROR_NONE) {
    die('Error al decodificar el JSON: ' . json_last_error_msg());
}

if($email==$datos['email'] && $contraseña==$datos['password']){
        # Iniciar sesión para poder usar el arreglo
        session_start();
        # Y guardar un valor que nos pueda decir si el usuario
        # ya ha iniciado sesión o no. En este caso es el nombre
        # de usuario
        $_SESSION["usuario"] = $email;
    
        # Luego redireccionamos a la página "Secreta"
        header("Location: ../../pages/admin.php");
}else{
    ?>
<script>
    alert("algo salio mal")
</script>
    <?php
    header("Location: ../../pages/login.html?error=algo salio mal");
}

?>
