<?php
include ("../database/bd.php");

if (isset($_POST['btnAgreggate'])) {
    $nombreProyecto = mysqli_real_escape_string($conexion, $_POST['nombreProyecto'] ?? '');
    $repositorio = mysqli_real_escape_string($conexion, $_POST['repoGithub'] ?? '');
    $stacks = mysqli_real_escape_string($conexion, $_POST['resultado'] ?? '');
    $link = mysqli_real_escape_string($conexion, $_POST['link'] ?? '');
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje'] ?? '');
    $nombreArchivo = null;

    // Validar que los campos requeridos no estén vacíos
    if (empty($nombreProyecto) || empty($stacks) || empty($mensaje)|| empty($repositorio)) {
        echo "Todos los campos obligatorios deben ser completados (Nombre del Proyecto, Stacks, Mensaje, Repositorio).";
    } else {
        // Manejar archivo subido
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $archivoTmpNombre = $_FILES['archivo']['tmp_name'];
            $archivoDestino = '../uploads/' . $nombreArchivo;

            // Mover archivo subido a la carpeta de destino
            if (move_uploaded_file($archivoTmpNombre, $archivoDestino)) {
                echo "Archivo subido exitosamente.";
            } else {
                echo "Error al subir el archivo.";
            }
        }

        // Preparar la consulta SQL de inserción
        $sql_insert = "INSERT INTO trabajos (nombre, descripcion, link, nombreArchivo, stacks, repositorio) 
                       VALUES ('$nombreProyecto', '$mensaje', '$link', '$nombreArchivo', '$stacks', '$repositorio')";

        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql_insert)) {
            echo "Nuevo proyecto agregado exitosamente";
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
        header("Location: ../../pages/admin.php");
    }
}
?>