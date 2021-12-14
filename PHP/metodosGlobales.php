<?php
function desplegarUser($mbd){
$cedula=$_SESSION['cedula_user'];
$output=" ";
if(isset ($cedula)){
$todosViajes=$mbd->query("SELECT nombre_user, apellido_user, foto_user from usuarios WHERE cedula_user='$cedula'");
while($consultaViajes=$todosViajes->fetch(PDO::FETCH_OBJ)) {
$output='<span class="mr-2 d-none d-lg-inline text-gray-600 small">'.$consultaViajes->nombre_user.' '.$consultaViajes->apellido_user.'</span>';
$output.='<img class="img-profile rounded-circle"';
$output.='src="../../img/'.$consultaViajes->foto_user.'">';
}}

return $output;}






?>