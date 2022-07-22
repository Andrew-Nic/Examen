<?php

function conectarDB(){
    $servidor= "localhost";
    $usuario="root";
    $clave="";
    $database="examen";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $database);
    return $conexion;
}

?>