<?php

include_once 'conexion.php';
// Prepare
$stmt = $dbh->prepare("INSERT INTO propiedad(direccion_propiedad, precio, descripcion) VALUES (?, ?, ?)");
// Bind RCIBDO DESDE UN FORMULARIO
/*$ced="119900";
$nom = "Pedro perez";
$dir="call 23 45 67";
$tel = "223344";*/
$dir=$_POST['direccion'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$stmt->bindParam(1, $dir);
$stmt->bindParam(2, $precio);
$stmt->bindParam(3, $descripcion);
$stmt->execute();
if($stmt === TRUE)
    { echo'<script type="text/javascript"> alert("REGISTRO ELIMINADO CON EXITO!")</script>';
    echo "<script> window.location.href = 'formulario.php';</script>";
    }else{
    echo'<script type="text/javascript"> alert("REGISTRO ALMACENADO CON EXITO!")</script>';
    echo "<script> window.location.href = 'formulario.php';</script>";

    }   

?>