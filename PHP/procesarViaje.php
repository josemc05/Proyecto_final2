<?php
include("conexion.php");
if (isset($_POST['boton'])){
    $id=$_POST['reserva'];
    $id_vehiculo=$_POST['placa'];
    $kilometros=$_POST['km'];
    if($_POST['boton']==2){
        $query="UPDATE vehiculos SET km_actuales='$kilometros' WHERE placa='$id_vehiculo'";
        // Prepare statement
        $stmt = $mbd->prepare($query);
        // execute the query
        $stmt->execute();
        $todosVehiculos=$mbd->query("select km_actuales, km_mantenimiento from vehiculos where placa='$id_vehiculo'");
        while($consultaVehiculos=$todosVehiculos->fetch(PDO::FETCH_OBJ)) {
            if($consultaVehiculos->km_actuales>=(5000+$consultaVehiculos->km_mantenimiento)){
                $query="UPDATE vehiculos SET estado_vehi=2 WHERE placa='$id_vehiculo'";
                // Prepare statement
                $stmt = $mbd->prepare($query);
                // execute the query
                $stmt->execute();
                $stmt = $mbd->prepare( "DELETE FROM reservas WHERE id_reserva='$id'" );
                $stmt->execute();
                header("Location: ../VISTAS/Usuario_Transportista/reservasTransportista.php");
            }
            else{
               $stmt = $mbd->prepare( "DELETE FROM reservas WHERE id_reserva='$id'" );
                $stmt->execute();
                header("Location: ../VISTAS/Usuario_Transportista/reservasTransportista.php");
            }
        }
      
        
        
        /*$stmt = $mbd->prepare($query);

        // execute the query
        $stmt->execute();*/

    }
    else{
        $query="UPDATE estado_reserva SET estado_reserva=2 WHERE estado_id_reserva='$id'";
        // Prepare statement
        $stmt = $mbd->prepare($query);

        // execute the query
        $stmt->execute();

        header("Location: ../VISTAS/Usuario_Transportista/reservasTransportista.php");
    }
}




?>