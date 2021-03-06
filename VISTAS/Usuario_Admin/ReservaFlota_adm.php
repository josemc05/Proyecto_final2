<?php
session_start();
include("../../PHP/verificar.php");
include("../../PHP/conexion.php");
include("../../PHP/consultaUser.php");
include("../../PHP/metodosGlobales.php");
if($datoUser->tipo_user!=1){
    include("../../PHP/salir2.php");
}


function desplegarCedula($mbd){
    $output='';
    $cedulaRegulares=$mbd->query("SELECT cedula_user FROM usuarios WHERE tipo_user=3");
    while($consultaCedula=$cedulaRegulares->fetch(PDO::FETCH_OBJ)) {
       $output.='<option name="nivel" value="'.$consultaCedula->cedula_user.'">'.$consultaCedula->cedula_user.'</option>';
        }
    return $output;
    }

    function desplegarPlaca($mba){
        $output='';
        $PlacaRegulares=$mba->query("SELECT placa FROM vehiculos WHERE estado_vehi=1");
        while($consultaPlaca=$PlacaRegulares->fetch(PDO::FETCH_OBJ)) {
           $output.='<option name="nivel" value="'.$consultaPlaca->placa.'">'.$consultaPlaca->placa.'</option>';
            }
        return $output;
        }

        function desplegarCedulaT($mbd){
            $output='';
            $cedulaTRegulares=$mbd->query("SELECT cedula_user FROM usuarios WHERE tipo_user=2");
            while($consultaCedulaT=$cedulaTRegulares->fetch(PDO::FETCH_OBJ)) {
               $output.='<option name="nivel" value="'.$consultaCedulaT->cedula_user.'">'.$consultaCedulaT->cedula_user.'</option>';
                }
            return $output;
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>General</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="../../CSS/sb-admin-2.css" rel="stylesheet">
    <link href="../../CSS/maquillaje.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary2 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="revisarpeticion.php"> <!--PHP-->
                <div class="sidebar-brand-icon ">
                    <img src="../../IMG/logoUTPwhite.png" width="65" height="65"></img>
                </div>
                <div class=" mx-3">ATT <sup>1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider ">
            <!-- Heading -->
            <div class="sidebar-heading">
                Men??
            </div>

            <!-- Nav Item - Dashboard -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Peticiones</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="revisarpeticion.php">Revision de Peticiones</a>
                        <a class="collapse-item" href="ReservaFlota_adm.php">Agregar Peticion</a>
                    </div>
                </div>
            
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="far fa-user"></i>
                    <span>Administrar Usuarios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="usuariosNomina.php">Nomina de Usuarios</a>
                        <a class="collapse-item" href="transportistaNomina.php">Nomina de Transportistas</a>
                        <a class="collapse-item" href="agregarTransport.php">Agregar Transportista</a>
                        <a class="collapse-item" href="agregarAdm.php">Agregar Admin</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="flota.php"> <!--PHP-->
                    <i class="fas fa-car"></i>
                    <span>Flota Vehicular</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h2>Reservas de Transporte</h2>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                            <!-- Dropdown - Messages -->
                          

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo desplegarUser($mbd);
                                ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../editarPerfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesi??n
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- SECCIONES PEGAR AQUI -->
                                    <div class="row">
                                        <div class="col-8 mx-auto">
                                        <div class="col">
                                            <div class="p-5">
                                                <div class="row-fluid">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">  
                                                              
                                                                <img style="height: 19%;width: 19%; padding: -4%; margin: -1.5%;"  src="../../IMG/v2.png">

                                                                <div class="col mr-2">        
                                                                    <h5 style="color: darkmagenta; font-weight: bold; text-align: center;">Reservar Flota vehicular</h5>      
                                                                </div>    
                                                                <div class="col-auto"> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4" style="font-size: 15px;">Llene el siguiente formulario de solicitud de vehiculo</h1>
                                                </div>
                                                <form class="col" action="../../PHP/reservaAdm.php" method="post" id ="registro"  name="registro">
                                                <!--  Cedula del solicitante-->    
                                                        <div class="form-group">
                                                            <select class="form-select" name="cedula" id="cedula" required>
                                                                <option selected>Seleccione la Cedula del Solicitante</option>
                                                                <?php echo desplegarCedula($mbd); 
                                                                ?> 
                                                            </select>
                                                            </div>    
                                                         <!-- Destino del viaje-->     
                                                            <div class="form-group">
                                                        <input type="text" class="form-control form-control-user" 
                                                            placeholder="Destino" name="destino" id="destino" required>
                                                            </div>
                                                    <!--  Hora y fecha de Inicio del viaje-->
                                                    <div class="form-group">
                                                    
                                                        <label>Fecha y Hora de inicio del viaje</label>
                                                            <input type="datetime-local" class="form-control form-control-user" id="fechaIn"
                                                                placeholder="Fecha" name="fechaIn" id="fechaIn" required>
                                                    </div>
                                                    <!--  Hora y fecha de Final del viaje-->
                                                    <div class="form-group">
                                                    
                                                        <label>Fecha y Hora de fin del viaje</label>
                                                            <input type="datetime-local" class="form-control form-control-user" id="fechaFin"
                                                                placeholder="Fecha" name="fechaFin" id="fechaFin" required>
                                                    </div>
                                                    <!--  Cantidad de personas-->
                                                    <div class="form-group">
                                                        <input type="number"  min="1" max="100" class="form-control form-control-user" id="exampleInputEmail"
                                                            placeholder="Cantidad de personas" name="pasajeros" id="pasajeros" required>
                                                    </div>
                                                    <!--  Descripcion del viaje-->
                                                    <div class="form-group">
                                                    <label>Descripcion del viaje</label>
                                                    <textarea maxlenght="500" class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrip" id="descrip" required></textarea>
                                                    </div>
                                                    <!--  Placas-->
                                                    <div class="form-group">
                                                            <select class="form-select" name="placa" id="placa" required>
                                                                <option selected>Seleccione la placa del carro</option>
                                                                <?php echo desplegarPlaca($mbd); 
                                                                ?> 
                                                            </select>
                                                            </div> 
                                                    <!--  Transportista-->
                                                     <div class="form-group">
                                                            <select class="form-select" name="cedulat" id="cedulat" required>
                                                                <option selected>Seleccione la cedula del transportista</option>
                                                                <?php echo desplegarCedulaT($mbd); 
                                                                ?> 
                                                            </select>
                                                            </div>       
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        Solicitar flota vehicular
                                                </buttton>
                                                    
                                                </form>
                                                
                                            </div>
                                            </div>
                    
                                            <!-- Earnings (Monthly) Card Example -->
                                            
                                            <!-- Earnings (Monthly) Card Example -->
                                            
                    
                                            <!-- Earnings (Monthly) Card Example -->
                                            
                    
                                            <!-- Pending Requests Card Example -->
                                            
                                            </div>
                                        </div>
                                        
                                        <!-- Content Row -->
                    
                    
                                            <!-- Area Chart -->
                                            
                                        <!-- Content Row -->
                                      
                    
                                            <!-- Content Column -->
                                          
                                        <!--IMPORTANTE DEL FOOTER /.container-fluid -->
                                    </div>
                                    <!-- /.container-fluid -->
                    
                                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>  Universidad Tecnologica de Panam?? &copy; Copyright 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">??Seguro desea cerrar sesion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Logout" si esta seguro que desea cerrar sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../PHP/salir.php">Logout</a> <!--PHP-->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
