<?php

require("conexion.php");
$conex = conectarDB();


$consultaOpciones = "select * from roles";
$consul = mysqli_query($conex, $consultaOpciones);
$sql = "select * from empleados";
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
                    <h1>Registrar Empleado</h1>
                    <form action="insertEmpleados.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id" placeholder="ID Empleado">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre Empleado">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                        <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">

                        <select class="form-select mb-3" aria-label="Default select example" name="id_rol">
                        <option selected>Seleciona un rol</option>
                        <?php 
                            while ($rw = mysqli_fetch_array($consul)) {
                        

                                $idrol=$rw['id_rol'];
                                $nomROl=$rw['nombreRol'];
                        ?>
                            <option value="<?php echo $idrol?>"><?php echo $nomROl?></option>
                        <?php
                            }
                        ?>
                        
                            
                            

                        </select>
                        
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-8">
                    <Table class="table">
                        <thead class="table-success table-striped" >
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>USUARIO</th>
                                <th>ID DEL ROL</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['id']?></th>
                                    <th><?php  echo $row['nombre']?></th>
                                    <th><?php  echo $row['apellido']?></th>
                                    <th><?php  echo $row['usuario']?></th>
                                    <th><?php  echo $row['id_rol']?></th>     
                                    <th><a href="actualizarEmpleado.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="deleteEmpleados.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
