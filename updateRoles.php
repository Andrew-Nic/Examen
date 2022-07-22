<?php

require("conexion.php");
$conex = conectarDB();

$id=$_POST['id_rol'];
$nombre=$_POST['nombreRol'];
$desc=$_POST['descripcion'];


$sql="UPDATE roles SET  id='$id',nombreRol='$nombre',descripcion='$desc' WHERE id_rol='$id'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: roles.php");
    }
?>