<?php
include('conexion.php');
$id_usuario=$_SESSION['cedula_user'];
$resultado=$mbd->query("SELECT * FROM usuarios WHERE cedula_user='$id_usuario'");
$datoUsuario=$resultado->fetch(PDO::FETCH_OBJ);
?>