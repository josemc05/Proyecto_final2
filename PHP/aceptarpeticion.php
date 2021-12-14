<?php
include("conexion.php");
session_start();


echo $id=$_POST['id'];

$query="INSERT INTO estado_reserva VALUES($id,1)";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();

$query="DELETE FROM reservas WHERE id_reserva=$id";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();



echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/revisarpeticion.php">';


?>