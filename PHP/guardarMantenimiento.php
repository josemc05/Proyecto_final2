<?php
include("conexion.php");
session_start();


echo $placa=$_POST['placa'];
echo $kmm=$_POST['kdm'];

$query="UPDATE vehiculos SET km_actuales=km_actuales-$kmm, km_mantenimiento=km_mantenimiento+$kmm WHERE placa='$placa'";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();

echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/flota.php">';

?>