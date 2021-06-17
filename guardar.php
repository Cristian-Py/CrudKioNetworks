<?php

include("conexion.php");


if (isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    $insertar = "INSERT INTO t_alumno (nombre, paterno, materno) VALUES ('$nombre', '$paterno', '$materno')";

    $resultado = mysqli_query($conn, $insertar);
    echo $nombre;
    echo $paterno;
    echo $materno;
    echo $insertar;
    echo $resultado;

    if(!$resultado){
        die("No Registrado");
    }
    $_SESSION['mensaje'] = 'Dato Guardado';
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}

?>