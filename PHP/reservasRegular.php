<?php
include("conexion.php");
function desplegarReservas($mbd){
    $output='';
    /*$cedula_user=$_SESSION['id'];*/
   
    $todasReservas=$mbd->query("SELECT id_reserva, pasajeros, destino, fecha_inicio, fecha_fin, re_placa, tipo_vehi FROM reservas INNER JOIN vehiculos on re_placa=placa;");
    /*$todosViajes=$mbd->query("SELECT id_reserva, nombre_user, apellido_user pasajeros, destino, fecha_inicio, fecha_fin, descripcion, re_placa FROM reservas INNER JOIN usuarios ON re_cedula_user=cedula_user WHERE re_cedula_trans='".$cedula_user."");*/
    while($consultaReservas=$todasReservas->fetch(PDO::FETCH_OBJ)) {
        $output.='<div class="row-fluid">';
        $output.='<div class="card">';
        $output.='<div class="card-body">';
        $output.=' <div class="row no-gutters align-items-center">';
        if($consultaReservas->tipo_vehi=='sedan'){
        $output.=' <img style="height: 13%;width: 13%; padding: 1%; margin: 1%;" class="tamaño" src="../../IMG/v1.png">';}
        else if($consultaReservas->tipo_vehi=='SUV'){
        $output.=' <img style="height: 13%;width: 13%; padding: 1%; margin: 1%;" class="tamaño" src="../../IMG/v2.png">';}
        else if($consultaReservas->tipo_vehi=='Pick-up'){
        $output.=' <img style="height: 13%;width: 13%; padding: 1%; margin: 1%;" class="tamaño" src="../../IMG/v4.png">';}
        else if($consultaReservas->tipo_vehi=='autobus'){
        $output.=' <img style="height: 13%;width: 13%; padding: 1%; margin: 1%;" class="tamaño" src="../../IMG/v3.png">';}
        $output.=' <div class="col mr-2">';
        $output.='<h5>Modelo vehiculo '.$consultaReservas->tipo_vehi.'</h5>';
        $output.=' <p class="card-text ">Matricula: '.$consultaReservas->re_placa.'</p>';
        $output.='<p class="card-text">Fecha de Inicio: '.$consultaReservas->fecha_inicio.'</p>';
        $output.='<p class="card-text">Fecha de Finalizacion: '.$consultaReservas->fecha_fin.'</p>';
        $output.='<p class="card-text ">Destino: '.$consultaReservas->destino.'</p>';
        $output.='<p class="card-text">Cantidad de pasajeros: '.$consultaReservas->pasajeros.'</p>';
        $output.='</div> ';
        $output.='<div class="col-auto">';
        $output.='<a type="button" class="btn btn-danger float-right ml-2" href="../../PHP/cancelarReserva.php?id='.$consultaReservas->id_reserva.'">Cancelar reserva</a>';
        $output.='</div>';
        $output.='</div></div></div></div><hr>';
        



    }
        
        
    return $output.='</div>';}
    





?>