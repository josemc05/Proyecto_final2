<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary2 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="panelAdmin.php">
                <div class="sidebar-brand-icon ">
                    <img src="../../IMG/logoUTPwhite.png" width="65" height="65"></img>
                </div>
                <div class=" mx-3">ATT <sup>1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider ">
            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
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
                        <a class="collapse-item" href="agregarpeticion.php">Agregar Peticion</a>
                    </div>
                </div>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" href="agregarTransport.php">
                    <i class="fas fa-user-plus"></i>
                    <span>Agregar Transportista</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminNomina.php">
                    <i class="fas fa-users"></i>
                    <span>Nomina</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Jose Cuevas</span>
                                <img class="img-profile rounded-circle"
                                    src="../../img/user.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
                    <!-- INICIO DE BARRA -->
                    <div class="row-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">        

                                        <figure style="float: left" class="image is-128x128">
                                        <img class="is-rounded" src="https://creamas.org/wp-content/uploads/2017/08/foto-edi-pasaporte-carnet-.jpg">
                                        </figure>

                                    <div class="col mr-2">     
                                    <h5></h5>    
                                        <p class="card-text ">Usuario:Juan Carlos </p>
                                        <p class="card-text">Modelo de Vehiculo: mid-size</p>
                                        <p class="card-text">Matricula: AA0001</p>
                                        <p class="card-text ">Fecha:05/07/21 01:23am Destino</p>
                                        <p class="card-text">Numero de pasajeros: 4</p>
                                    </div>    
                                    <div class="col-auto">
                                    <a type="button" class="btn btn-info">Aprobar</a>    
                                    <a type="button" class="btn btn-danger">Rechazar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- FINAL DE BARRA -->
                         <!-- INICIO DE BARRA -->
                         <div class="row-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">        

                                        <figure style="float: left" class="image is-128x128">
                                        <img class="is-rounded" src="https://creamas.org/wp-content/uploads/2017/08/foto-edi-pasaporte-carnet-.jpg">
                                        </figure>

                                    <div class="col mr-2">     
                                    <h5></h5>    
                                        <p class="card-text ">Usuario:Juan Carlos </p>
                                        <p class="card-text">Modelo de Vehiculo: mid-size</p>
                                        <p class="card-text">Matricula: AA0001</p>
                                        <p class="card-text ">Fecha:05/07/21 01:23am Destino</p>
                                        <p class="card-text">Numero de pasajeros: 4</p>
                                    </div>    
                                    <div class="col-auto">
                                    <a type="button" class="btn btn-info">Aprobar</a>    
                                    <a type="button" class="btn btn-danger">Rechazar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- FINAL DE BARRA -->
                                        <!-- INICIO DE BARRA -->
                                        <div class="row-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">        

                                        <figure style="float: left" class="image is-128x128">
                                        <img class="is-rounded" src="https://creamas.org/wp-content/uploads/2017/08/foto-edi-pasaporte-carnet-.jpg">
                                        </figure>

                                    <div class="col mr-2">     
                                    <h5></h5>    
                                        <p class="card-text ">Usuario:Juan Carlos </p>
                                        <p class="card-text">Modelo de Vehiculo: mid-size</p>
                                        <p class="card-text">Matricula: AA0001</p>
                                        <p class="card-text ">Fecha:05/07/21 01:23am Destino</p>
                                        <p class="card-text">Numero de pasajeros: 4</p>
                                    </div>    
                                    <div class="col-auto">
                                    <a type="button" class="btn btn-info">Aprobar</a>    
                                    <a type="button" class="btn btn-danger">Rechazar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- FINAL DE BARRA -->
                                        <!-- INICIO DE BARRA -->
                                        <div class="row-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">        

                                        <figure style="float: left" class="image is-128x128">
                                        <img class="is-rounded" src="https://creamas.org/wp-content/uploads/2017/08/foto-edi-pasaporte-carnet-.jpg">
                                        </figure>

                                    <div class="col mr-2">     
                                    <h5></h5>    
                                        <p class="card-text ">Usuario:Juan Carlos </p>
                                        <p class="card-text">Modelo de Vehiculo: mid-size</p>
                                        <p class="card-text">Matricula: AA0001</p>
                                        <p class="card-text ">Fecha:05/07/21 01:23am Destino</p>
                                        <p class="card-text">Numero de pasajeros: 4</p>
                                    </div>    
                                    <div class="col-auto">
                                    <a type="button" class="btn btn-info">Aprobar</a>    
                                    <a type="button" class="btn btn-danger">Rechazar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- FINAL DE BARRA -->
                    </div>
                <!-- /.container-fluid -->

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>  Universidad Tecnologica de Panamá &copy; Copyright 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../index.php">Logout</a>
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