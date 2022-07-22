<?php
require("conexion.php");
$conex = conectarDB();

$id=$_POST['id_rol'];
$nombre=$_POST['nombreRol'];
$desc=$_POST['descripcion'];



$sql="INSERT INTO roles VALUES('$id','$nombre','$desc')";
$query= mysqli_query($conex,$sql);

if($query){
    Header("Location: roles.php");   
}

?>