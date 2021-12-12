<?php

    /*include('conexion.php');
    $id_usuario=$_SESSION['id'];
    $resultado=$mbd->query("SELECT * FROM usuarios WHERE id='$id_usuario'");
    $datoUsuario=$resultado->fetch(PDO::FETCH_OBJ);*/

    
    include("../configuracion/conexion.php");
    $ced_usuario = $_SESSION['cedula_user'];
    $result = $conn->query("SELECT * FROM usuarios WHERE cedula_user ='$ced_usuario'");
    $datoUser=$result->fetch(PDO::FETCH_OBJ);

?>