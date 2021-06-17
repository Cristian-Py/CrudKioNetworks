<?php

    include('conexion.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM t_alumno WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        if(mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $paterno = $row['paterno'];
            $materno = $row['materno'];
        }
    }

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        
        $query = "UPDATE t_alumno set nombre = '$nombre', paterno = '$paterno', materno = '$materno' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['mensaje'] = 'Registro Actualizado';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" 
                        class="form-control" placeholder="Actualiza Tu Nombre">
                    </div>
                    <div class="form-group">    
                        <input type="text" name="paterno" value="<?php echo $paterno; ?>" 
                        class="form-control" placeholder="Actualiza Tu Apellido Paterno">
                    </div>    
                    <div clas="form-group">
                        <input type="text" name="materno" value="<?php echo $materno; ?>" 
                        class="form-control" placeholder="Actualiza Tu Apellido Materno">
                    </div>
                    <br>
                    <button class="btn btn-success" name="actualizar">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>