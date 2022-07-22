<?php

require("conexion.php");
$conex = conectarDB();

$sql = "select * from roles";
$query = mysqli_query($conex, $sql);

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Crud</title>
        <meta charset="UTF-8"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include "partesPagina.php";
	        encabezado();
        ?>
        
        <div class="container mt-5">
        
            <div class="row">
                <div class="col-md-3">
                    <h1>Registrar Roles</h1>
                    <form action="insertRol.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id" placeholder="ID rol">
                        <input type="text" class="form-control mb-3" name="nombreRol" placeholder="Nombre rol">
                        <input type="textarea" class="form-control mb-3" rows="3" name="descripcion" placeholder="Descripcion del rol">
                        
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-8">
                    <Table class="table">
                        <thead class="table-success table-striped" >
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE DEL ROL</th>
                                <th>DESCRIPCION</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['id_rol']?></th>
                                    <th><?php  echo $row['nombreRol']?></th>
                                    <th><?php  echo $row['descripcion']?></th> 
                                    <th><a href="actualizarRol.php?id=<?php echo $row['id_rol'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="deleteRol.php?id=<?php echo $row['id_rol'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>
</html>
