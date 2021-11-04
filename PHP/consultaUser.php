<?php
include('conexion.php');
$id_usuario=$_SESSION['id'];
$resultado=$mbd->query("SELECT * FROM usuarios WHERE id='$id_usuario'");
$datoUsuario=$resultado->fetch(PDO::FETCH_OBJ);
?>