<?php
include("conexion.php");
session_start();


echo $placa=$_POST['placa'];
echo $kmm=$_POST['kdm'];

$query="UPDATE vehiculos SET km_actuales=km_actuales-$kmm, km_mantenimiento=km_mantenimiento+$kmm WHERE placa='$placa'";
$stmt = $mbd->prepare($query);
// execute the query
$stmt->execute();
        if ($tipo==1)
            {
                header("Location: ../VISTAS/Usuario_Admin/revisarpeticion.php");
            }
            else if($tipo==2)
            {
                header("Location: ../VISTAS/Usuario_Transportista/reservasTransportista.php");
            }
            else if($tipo==3)
            {
                header("Location: ../VISTAS/Usuario_Regular/reservasActuales.php");
            }
            exit;

?>