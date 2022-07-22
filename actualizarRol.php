<?php
require("conexion.php");
$conex = conectarDB();


$id=$_GET['id_rol'];

$sql="SELECT * FROM roles WHERE id_rol='$id'";
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
            <form action="updateRoles.php" method="POST">
                    
                <input type="hidden" name="id_rol" value="<?php echo $row['id_rol']  ?>">
                                
                <input type="text" class="form-control mb-3" name="nombreRol" placeholder="Nombre Rol" value="<?php echo $row['nombreRol']  ?>">
                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>