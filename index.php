<?php include("conexion.php");?>

<?php include("includes/header.php");?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

                    <?php if(isset($_SESSION['mensaje'])) {?> 
                        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                                <?= $_SESSION['mensaje']; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php session_unset();} ?>

            <div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="nombre" class="form-control" 
                    placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="paterno" class="form-control"
                        placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group">
                    <input type="text" name="materno" class="form-control"
                    placeholder="Apellido Materno">     
                    </div>
                    <input type="submit" class="btn btn-success btn-block" 
                    name="guardar" value="Agregar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                        <?php
                        $query = "SELECT * FROM t_alumno";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) {?>
                        <tr>
                            <td><?php echo $row ['id'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['paterno'];?></td>
                            <td><?php echo $row['materno'];?></td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $row['id']?>" class ="btn btn-secondary">
                                    <i class ="fas fa-user-edit"></i>
                                </a>

                                <a href="borrar.php?id=<?php echo $row['id']?>"class ="btn btn-danger">
                                  <i class ="fas fa-user-times"></i>
                                </a>
                                
                            </td>
                        </tr>

                        <?php }?>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php");?>
