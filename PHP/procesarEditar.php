<?php
include("conexion.php");
session_start();


echo $nuevoN=$_POST['nombre'];
echo $nuevoA=$_POST['apellido'];
echo $nuevoF=$_POST['predefinido'];

$_FILES['foto']['name'];

if (($_FILES['foto']['name'])!=""){
$temp=$_FILES['foto']['tmp_name'];
$nuevoF=$_SESSION['cedula_user'].".png";
move_uploaded_file($temp, '../IMG/'.$nuevoF);
}
$id=$_SESSION['cedula_user'];
$resultado=$mbd->query("SELECT tipo_user FROM usuarios WHERE cedula_user='$id'");
$datoUsuario=$resultado->fetch(PDO::FETCH_OBJ);
$tipo=$datoUsuario->tipo_user;


$actualizacion=$mbd->query("UPDATE usuarios SET nombre_user='$nuevoN', apellido_user='$nuevoA', foto_user='$nuevoF' WHERE cedula_user='$id'");

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