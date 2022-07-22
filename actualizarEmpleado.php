<?php
require("conexion.php");
$conex = conectarDB();

$id=$_GET['id'];

$sql="SELECT * FROM empleados WHERE id='$id'";
$query=mysqli_query($conex,$sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Actualizar empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <form action="updateEmpleados.php" method="POST">
                    
                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">
                <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario']  ?>">
                <input type="text" class="form-control mb-3" name="id_rol" placeholder="rol" value="<?php echo $row['id_rol']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
                    
        </div>
    </body>
</html>