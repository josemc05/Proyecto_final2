<?php
include("conexion.php"); 


if(isset ($_PUT['placa'])){

echo $placa = $_REQUEST['placa'];
echo $kmm = $_REQUEST['kmm'];


try{
$sentencia = $mbd->prepare("UPDATE vehiculos
                            SET km_mantenimiento=km_mantenimiento+:kmm
                            WHERE placa=':placa'
                            ");
$sentencia->bindParam(':placa', $placa);
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