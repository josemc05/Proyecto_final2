<?php
include("conexion.php"); 


if(isset ($_POST['placa'])){

echo $pasa = $_REQUEST['pasajeros'];
echo $dest = $_REQUEST['destino'];
echo $fecha_ini = $_REQUEST['fechaIn'];
echo $fecha_fin = $_REQUEST['fechaFin'];
echo $hist_desc = $_REQUEST['descrip'];
echo $cedulau = $_REQUEST['cedula'];
echo $placa = $_REQUEST['placa'];
echo $cedulat = $_REQUEST['cedulat'];


try{ 
$sentencia = $mbd->prepare("INSERT INTO reservas (pasajeros, destino,fecha_inicio, fecha_fin,descripcion,re_cedula_user,re_placa, re_cedula_trans) 
                                            VALUES (:pasa, :dest, :fecha_ini,:fecha_fin,:hist_desc,:cedulau,:placa,:cedulat )");
$sentencia->bindParam(':pasa', $pasa);
$sentencia->bindParam(':dest', $dest);
$sentencia->bindParam(':fecha_ini', $fecha_ini);
$sentencia->bindParam(':fecha_fin', $fecha_fin);
$sentencia->bindParam(':hist_desc', $hist_desc);
$sentencia->bindParam(':cedulau', $cedulau);
$sentencia->bindParam(':placa', $placa);
$sentencia->bindParam(':cedulat', $cedulat);
$sentencia->execute();
echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/ReservaFlota_adm.php">';
}
catch(PDOException $e){
if($e->errorInfo[1]==1062){
    echo "Esos datos ya estan dentro registrados";
    echo '<script type="text/javascript">'
   , 'alert("Ese correo electronico ya se encuentra registrado");'
   , '</script>'
;
    echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/ReservaFlota_adm.php">';
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
echo '<meta http-equiv="refresh" content="0; url=../VISTAS/Usuario_Admin/ReservaFlota_adm.php">';
}

?>