<?php
require("conexion.php");
$conex = conectarDB();

$id_rol=$_GET['id_rol'];

$sql="DELETE FROM roles  WHERE id_rol='$id_rol'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: roles.php");
    }
?>