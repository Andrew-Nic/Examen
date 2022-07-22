<?php
require("conexion.php");
$conex = conectarDB();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$rol=$_POST['id_rol'];


$sql="INSERT INTO empleados VALUES('$id','$nombre','$apellido','$usuario','$rol')";
$query= mysqli_query($conex,$sql);

if($query){
    Header("Location: index.php");   
}

?>