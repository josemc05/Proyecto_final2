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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="panelRegular.php"> <!--PHP-->
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
                <a class="nav-link" href="reservasActuales.php"> <!--PHP-->
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Reservas actuales</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservarFlota.php"> <!--PHP-->
                    <i class="fas fa-clipboard-list"></i>
                    <span>Reservar flota vehicular</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservaEspecial.php"> <!--PHP-->
                    <i class="fas fa-clipboard-list"></i>
                    <span>Reservar Caso especial</span></a>
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
                                                <form class="col">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                                            placeholder="Destino">
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input type="date" class="form-control form-control-user" id="exampleFirstName"
                                                                placeholder="Fecha">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="time" class="form-control form-control-user" id="exampleLastName"
                                                                placeholder="hora">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number"  min="1" max="100" class="form-control form-control-user" id="exampleInputEmail"
                                                            placeholder="Cantidad de personas">
                                                    </div>
                                                    
                                                    <a href="panelRegular.php" class="btn btn-primary btn-user btn-block">
                                                        Solicitar flota vehicular
                                                    </a>
                                                    
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
                    <a class="btn btn-primary" href="../../index.php">Logout</a> <!--PHP-->
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
