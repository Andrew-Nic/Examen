<?php
require("conexion.php");
$conex = conectarDB();

$id=$_GET['id_rol'];

$sql="DELETE FROM roles  WHERE id_rol='$id'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: roles.php");
    }
?>