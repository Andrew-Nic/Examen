<?php
require("conexion.php");
$conex = conectarDB();

$id_empleado=$_GET['id'];

$sql="DELETE FROM empleados  WHERE id='$id_empleado'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: index.php");
    }
?>