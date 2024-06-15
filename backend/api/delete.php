<?php
include ("../database/bd.php");

if (isset($_POST['btnDelete'])) {
    $id = mysqli_real_escape_string($conexion, $_POST['idDeleteName'] ?? '');
    $archivo = mysqli_real_escape_string($conexion, $_POST['archivoNameBD'] ?? '');
    $mensaje = '';

    // Asegurarse de que el nombre del archivo no esté vacío
    if (!empty($archivo)) {
        $archivoPath = '../uploads/' . $archivo;

        if (file_exists($archivoPath) && is_file($archivoPath)) {
            if (unlink($archivoPath)) {
            } else {
                $mensaje = "El archivo no se pudo eliminar.";
            }
        } else {
            $mensaje = "El archivo no existe o no es un archivo válido.";
        }
    } else {
        $mensaje = "El nombre del archivo está vacío.";
    }
    // Preparar la consulta SQL de borrar
    $sql_delete = "DELETE FROM trabajos WHERE id=$id";
    // Ejecutar la consulta SQL
    if (mysqli_query($conexion, $sql_delete)) {
        $mensaje = "Proyecto eliminado exitosamente.";
    } else {
        $mensaje = "Error al eliminar el proyecto de la base de datos: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
    header("Location: ../../pages/admin.php?mensaje=" . urlencode($mensaje));
    exit();
} else {
    header("Location: ../../pages/admin.php?mensaje=No se ha enviado el formulario correctamente.");
}
?>