<?php
include("conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $eliminar ="DELETE FROM t_alumno WHERE id = $id";

    $resultado = mysqli_query($conn, $eliminar);
    if(!$resultado){
        die("No eliminado");
    }
    $_SESSION['mensaje'] = 'Registro Eliminado';
    $_SESSION['message_type'] ='danger';
    header('Location: index.php');
}

?>