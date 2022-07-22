<?php

require("conexion.php");
$conex = conectarDB();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$id_rol=$_POST['id_rol'];

$sql="UPDATE empleados SET  id='$id',nombre='$nombre',apellido='$apellido',usuario='$usuario',id_rol='$id_rol' WHERE id='$id'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: index.php");
    }
?>