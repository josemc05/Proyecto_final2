<?php
include("conexion.php");
function desplegarReservas($mbd){
$output='';
$cedula_user=$_SESSION['cedula_user'];
$contador1=1;
$contador=0;
$output='<hr>';
$output.='<div class="card-deck">';
$todosViajes=$mbd->query("SELECT id_reserva, nombre_user, apellido_user, pasajeros, destino, fecha_inicio, fecha_fin, descripcion, re_placa, estado_reserva, km_actuales FROM reservas INNER JOIN usuarios ON re_cedula_user=cedula_user INNER JOIN estado_reserva ON id_reserva=estado_id_reserva INNER JOIN vehiculos on re_placa=placa WHERE re_cedula_trans='$cedula_user';");
/*$todosViajes=$mbd->query("SELECT id_reserva, nombre_user, apellido_user pasajeros, destino, fecha_inicio, fecha_fin, descripcion, re_placa FROM reservas INNER JOIN usuarios ON re_cedula_user=cedula_user WHERE re_cedula_trans='".$cedula_user."");*/
while($consultaViajes=$todosViajes->fetch(PDO::FETCH_OBJ)) {
    
    if ($contador < 3){
    $contador+=1;
    $placa=$consultaViajes->re_placa;
    $output.=' <div class="card">';
    $output.=' <div class="card-body">';
    $output.='<form action="../../PHP/procesarViaje.php"  name="registro" method="POST">';
    $output.='<p class="card-text">Fecha de inicio: '.$consultaViajes->fecha_inicio.'</p>';
    $output.='<p class="card-text">Fecha de finalizacion: '.$consultaViajes->fecha_fin.'</p>';
    $output.='<p class="card-text">Destino: '.$consultaViajes->destino.'</p>';
    $output.='<p class="card-text">Cantidad de pasajeros: '.$consultaViajes->pasajeros.'</p>';
    $output.='<p class="card-text" name="nombre" >Viaje de nombre de: '.$consultaViajes->nombre_user.' '.$consultaViajes->apellido_user.'</p>';
    $output.='<p class="card-text">Placa del Vehiculo Asignado: '.$placa.'</p>';
    $output.='<input type="hidden" name="reserva" value='.$consultaViajes->id_reserva.'>';
    if ($consultaViajes->estado_reserva==2){
        $output.='<input type="hidden" name="placa" value='.$placa.'>';
        $output.='<p class="card-text">Kilometros Actuales del vehiculo: '.$consultaViajes->km_actuales.'km</p>';
        $output.='</br><input type="text" class="form-control form-control-user" placeholder="Kilometros Nuevos del vehiculo" id="km" name="km" required>';
        $output.='</br><button type="submit" name="boton" class="btn btn-danger confirmation" value='.$consultaViajes->estado_reserva.'>Finalizar Viaje</button>';
        
    }
    else{
        $output.='</br><button type="submit" name="boton" class="btn btn-info " value='.$consultaViajes->estado_reserva.'>Iniciar Viaje</button>';
        
    }
    $output.="</form>";
    $output.='</div>';
    $output.='</div>';
    
    
}
else if($contador>=3){
    $contador=1;
    $placa=$consultaViajes->re_placa;
    $output.='</div>';
    $output.='<hr>';
    $output.='<div class="card-deck">';
    $output.=' <div class="card">';
    $output.=' <div class="card-body">';
    $output.='<form action="../../PHP/procesarViaje.php" method="post">';
    $output.='<p class="card-text">Fecha de inicio: '.$consultaViajes->fecha_inicio.'</p>';
    $output.='<p class="card-text">Fecha de finalizacion: '.$consultaViajes->fecha_fin.'</p>';
    $output.='<p class="card-text">Destino: '.$consultaViajes->destino.'</p>';
    $output.='<p class="card-text">Cantidad de pasajeros: '.$consultaViajes->pasajeros.'</p>';
    $output.='<p class="card-text">Viaje de nombre de: '.$consultaViajes->nombre_user.' '.$consultaViajes->apellido_user.'</p>';
    $output.='<p class="card-text">Placa del Vehiculo Asignado: '.$placa.'</p>';
    $output.='<input type="hidden" name="reserva" value='.$consultaViajes->id_reserva.'>';
    if ($consultaViajes->estado_reserva==2){
        $output.='<input type="hidden" name="placa" value='.$placa.'>';
        $output.='<p class="card-text">Kilometros Actuales del vehiculo: '.$consultaViajes->km_actuales.'km</p>';
        $output.='</br><input type="text" class="form-control form-control-user" placeholder="Kilometros Nuevos del vehiculo" id="km" name="km" required>';
        $output.='</br><button type="submit" name="boton" class="btn btn-danger confirmation" value='.$consultaViajes->estado_reserva.'>Finalizar Viaje</button>';
    }
    else{
        $output.='</br><button type="submit" name="boton" class="btn btn-info" value='.$consultaViajes->estado_reserva.'>Iniciar Viaje</button>';

    }
    $output.="</form>";
    $output.='</div>';
    $output.='</div>';
    
}
    /*FIN SEGUNDA TARJETA*/
    }
return $output.='</div>';
}

?>