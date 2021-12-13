<?php
include("conexion.php"); 
if(isset ($_POST['cedula'])&& isset($_POST['password'])){

echo $nombre = $_REQUEST['nombre'];
echo $apellido = $_REQUEST['apellido'];
echo $correo = $_REQUEST['email'];
echo $cedula =$_REQUEST['cedula'];
echo $password =md5($_REQUEST['password']);
echo $foto = "user.png";
echo $nivel ="1";

try{
$sentencia = $mbd->prepare("INSERT INTO usuarios (cedula_user, nombre_user, apellido_user, correo_user, password_user, tipo_user, foto_user) VALUES (:cedula, :nombre, :apellido, :correo, :password, :tipo, :foto)");
$sentencia->bindParam(':cedula', $cedula);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':password', $password);
$sentencia->bindParam(':tipo', $nivel);
$sentencia->bindParam(':foto', $foto);
$sentencia->execute();
echo '<meta http-equiv="refresh" content="0; url=../../VISTAS/Usuario_Admin/agregarAdm.php">';
}
catch(PDOException $e){
if($e->errorInfo[1]==1062){
    echo "Esos datos ya estan dentro registrados";
    echo '<script type="text/javascript">'
   , 'alert("Ese correo electronico ya se encuentra registrado");'
   , '</script>'
;
    echo '<meta http-equiv="refresh" content="0; url=../../index.php">';
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
echo '<meta http-equiv="refresh" content="0; url=../../index.php">';
}

?>