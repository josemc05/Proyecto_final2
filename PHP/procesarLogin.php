<?php
    session_start();
    include("../configuracion/conexion.php");

    if (isset ($_REQUEST['email'])&& isset($_REQUEST['contraseña']))
    {
        $email=$_REQUEST['email'];
        $contraseña=md5($_REQUEST['contraseña']);

        $consulta=$conn->query("SELECT cedula_user, tipo_user FROM usuarios WHERE correo_user='$email' and password ='$contraseña'");

        $consulta->setFetchMode(PDO::FETCH_NUM);

        $consulta->execute();
        $row = $consulta->fetchAll();
        if (!$row)
        {
            header("Location: ../index.php?msg=Datos incorrectos para ingresar, intente nuevamente");
            exit;
        }
        else
        {
            $tipo = $row[0][1];
            $cedu = $row[0][0];
            echo "Tiene autorización para acceder";
            $_SESSION['cedula_user']=$cedu;
            $_SESSION['sw']=true;

            if ($tipo==1)
            {
                header("Location: ../VISTAS/Usuario_Admin/panelAdmin.php");
            }
            else if($tipo==2)
            {
                header("Location: ../VISTAS/Usuario_Transportista/panelTranspor.php");
            }
            else if($tipo==3)
            {
                header("Location: ../VISTAS/Usuario_Regular/panelRegular.php");
            }
            exit;
        }
    }
    else
    {
        echo "No está definido";

    }
?>
