<?php
include ("../database/bd.php");

if (isset($_POST['btnUpdate'])) {
    $idProyecto = mysqli_real_escape_string($conexion, $_POST['idProyectoName'] ?? '');
    $nombreProyecto = mysqli_real_escape_string($conexion, $_POST['nombreProyecto'] ?? '');
    $repositorio = mysqli_real_escape_string($conexion, $_POST['repoGithub'] ?? '');
    $stacks = mysqli_real_escape_string($conexion, $_POST['resultado'] ?? '');
    $link = mysqli_real_escape_string($conexion, $_POST['link'] ?? '');
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje'] ?? '');
    $nombreArchivo = null;
    $nombreArchivoViejo = null;

    // Validar que los campos requeridos no estén vacíos
    if (empty($nombreProyecto) || empty($stacks) || empty($mensaje)|| empty($repositorio)) {
        echo "Todos los campos obligatorios deben ser completados (Nombre del Proyecto, Stacks, Mensaje).";
    } else {
        // Manejar archivo subido
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
            $nombreArchivo = $_FILES['archivo']['name'];
            $archivoTmpNombre = $_FILES['archivo']['tmp_name'];
            $archivoDestino = '../uploads/' . $nombreArchivo;
            $nombreArchivoViejo = mysqli_real_escape_string($conexion, $_POST['archivoViejo'] ?? '');
            $archivoPath = '../uploads/' . $nombreArchivoViejo;
         
            if (file_exists($archivoPath)) {
                if (unlink($archivoPath)) {
                    //   Mover archivo subido a la carpeta de destino
                    if (move_uploaded_file($archivoTmpNombre, $archivoDestino)) {
                        echo "Archivo subido exitosamente.";
                        $link=null;

                    } else {
                        echo "Error al subir el archivo.";
                    }
                } else {
                    echo "El registro fue eliminado, pero no se pudo eliminar el archivo.";
                }
            } else {
                echo "El archivo no existe.";
            }
        }
        $sql_update="UPDATE trabajos SET nombre='$nombreProyecto',descripcion='$mensaje',link='$link',nombreArchivo='$nombreArchivo',stacks='$stacks',repositorio='$repositorio' WHERE id='$idProyecto'";
        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql_update)) {
            echo "Nuevo proyecto agregado exitosamente";
        } else {
            echo "Error: " . $sql_update . "<br>" . mysqli_error($conexion);
        }

        mysqli_close($conexion);
        header("Location: ../../pages/admin.php");

    }
}


?>