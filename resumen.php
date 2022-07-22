<?php
require("conexion.php");
$conex = conectarDB();


$query = "select roles.nombreRol,count(*) from empleados, roles where empleados.id_rol=roles.id_rol group by roles.nombreRol";
$consul = mysqli_query($conex, $query) or die( mysqli_error($conex));
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
                    <Table class="table">
                        <thead class="table-success table-striped" >
                            <tr>
                                <th>Roles</th>
                                <th>Personas que ocupan el rol</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($consul)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['nombreRol']?></th>
                                    <th><?php  echo $row['count(*)']?></th>                                       
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                
            </div>
        </div>
    </body>
</html>