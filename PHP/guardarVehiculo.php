<?php
include("conexion.php"); 


if(isset ($_POST['placa'])){

echo $placa = $_REQUEST['placa'];
echo $tipo = $_REQUEST['tipo'];
echo $estado ="1";
echo $kma ="0";
echo $kmm ="0";

try{
$sentencia = $mbd->prepare("INSERT INTO vehiculos (placa, tipo_vehi, estado_vehi, km_actuales, km_mantenimiento) VALUES (:placa, :tipo ,:estado, :kma, :kmm)");
$sentencia->bindParam(':placa', $placa);
$sentencia->bindParam(':tipo', $tipo);
$sentencia->bindParam(':estado', $estado);
$sentencia->bindParam(':kma', $kma);
$sentencia->bindParam(':kmm', $kmm);
$sentencia->execute();
echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/flota.php">';
}
catch(PDOException $e){
if($e->errorInfo[1]==1062){
    echo "Esos datos ya estan dentro registrados";
    echo '<script type="text/javascript">'
   , 'alert("Ese correo electronico ya se encuentra registrado");'
   , '</script>'
;
    echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/flota.php">';
}
else{
    echo "otro error"; echo $e;
}
}
}
else{
echo "No tiene permiso para estar aqui";
echo '<script type="text/javascript">'
, 'alert("No puede estar aqui");'
, '</script>'
;
echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/flota.php">';
}

?>