<?php
    include ("../configuracion/conexion.php");
    include ("../clases/usuario.php");

    if (isset ($_REQUEST['email'])&& isset ($_REQUEST['pass']))
    {
        
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $cedula = $_REQUEST['cedula'];
        $email = $_REQUEST['email'];
        $contraseña = md5($_REQUEST['pass']);
        $foto="user.png";
        $nivel=3;

        echo ($nombre."<br>".$apellido."<br>".$email."<br>".$contraseña);

        $datos = new usuario ($foto,$nombre,$apellido,$cedula,$email,$contraseña,$nivel);

        //$insertar = $conn->prepare("INSERT INTO usuario (nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)");
        $insertar = $conn->prepare("INSERT INTO usuarios (apellido_user, cedula_user, correo_user, foto_user, nombre_user, password_user, tipo_user) VALUES (?,?,?,?,?,?,?)");
        try
        {
            $insertar->bindParam(1,$apellido);
            $insertar->bindParam(2,$cedula);
            $insertar->bindParam(3,$email);
            $insertar->bindParam(4,$foto);
            $insertar->bindParam(5,$nombre);
            $insertar->bindParam(6,$contraseña);
            $insertar->bindParam(7,$nivel);
            $insertar->execute();
            //$insertar->execute((array)$datos);
            $msg="Registro exitoso";
        }
        catch (PDOException $e)
        {
            if ($e->errorInfo[1]==1062)
            {
                $msg="Error, el email ya está registrado en el sistema";
            }
            else
            {
                echo ("Otro error");
                $msg="Error al guardar los datos";
            }
        }

        echo '<meta http-equiv="refresh" content="3; url=../VISTAS/Registro.php? msg='.$msg.'">';

    }
    else
    {
        echo "No esta definido";
        echo '<meta http-equiv="refresh" content="3; url=../index.php">';
    }
?>
