<?php
include("conexion.php");
session_start();



echo $id=$_POST['id'];

$query = "SELECT * FROM reservas WHERE id=$id";

    $pasajeros = $query['pasajeros'] ;
    $destino = $query['destino'] ;
    $fecha_inicio = $query['fecha_inicio'] ;
    $fecha_fin = $query['fecha_fin'] ;
    $descripcion = $query['descripcion'] ;
    $re_cedula_user = $query['re_cedula_user'] ;
    $re_placa = $query['re_placa'] ;
    $re_cedula_trans = $query['re_cedula_trans'];
   


$query="INSERT INTO historial_viajes (`hist_pasajeros`, `hist_destino`, `hist_fecha_inicio`, `hist_fecha_fin`, `hist_descripcion`, `hist_re_cedula_user`, `hist_re_placa`, `hist_re_cedula_trans`)
          VALUES ($pasajeros,$destino,$fecha_inicio,$fecha_fin,$descripcion,$re_cedula_user,$re_placa,$re_cedula_trans)";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();


$query="DELETE FROM reservas WHERE id_reserva=$id";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();

echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/revisarpeticion.php">';

?>