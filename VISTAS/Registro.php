<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <link rel="stylesheet" type="text/css" href="../CSS/maquillaje.css">
</head>

<body>
    
    <header>
        <section class="navega">
              <nav>
                
                  <img class="utp" src="../IMG/att.png" alt="">
                  <img class="att" src="../IMG/logo_utp.png" alt="">
                  <h1 style="text-align: center; color: rgb(255, 255, 255); font-size:250%; margin-top: 0.5%; " >ATT Reservas de transporte</h1>
                
              </nav>
          </section>
      </header>

    <section class="hero is-success is-fullheight">
        <br>
        <br>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <br><br>
                    <h3 class="title has-text-black">Registro</h3>
                    <div class="box">
                    <form action="../index.php"  method="post"  id="registro" name="registro">
                        <fieldset>    
                            <!-- INICIO CARGAR IMAGEN Y PREVISUALIZAR -->
                            <figure class="avatar">
                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                <p><img class="tamaño"id="output" width="200" src="../IMG/user.png"/></p>
                            </figure>
                                <p><label for="file" style="cursor: pointer;">Subir Imagen de Perfil</label></p>
                             <!-- FIN CARGAR IMAGEN Y PREVISUALIZAR -->
                            
                            <!-- Campo Nombre-->
                             <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Nombre" autofocus="" required>
                                </div>
                            </div>
                               
                            
                            <!-- Campo Apellido-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Apellido" required>
                                </div>
                            </div>
                            
                            <!-- Campo Cedula-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Cedula" required>
                                </div>
                            </div>
                            
                            <!-- Campo Nombre usuario-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="text" placeholder="Nombre de Usuario" required>
                                </div>
                            </div>
                            
                            <!-- Campo Tipo de usuario
                            <div class="field">
                                <div class="control">
                                    <div class="select  is-large">
                                    <select placeholder="Seleccione su tipo de usuario">
                                        <option>Usuario Regular</option>
                                        <option>Transportista</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
-->
                            <!-- Campo Correo-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Correo Electronico" required>
                                </div>
                            </div>

                            <!-- Campo Contraseña-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" id="pass" type="password" placeholder="Contraseña" required>
                                </div>
                            </div>

                            <!-- Campo Confirmar Contraseña-->
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" id="pass2" type="password" placeholder="Confirmar contraseña" required>
                                </div>
                            </div>


                            <button type="submit" style="background-color: #4B2E83;" class="button is-block is-info is-large is-fullwidth">Registrar<i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            
                        
                            </fieldset>
                    </form>
                </div>



                    <p class="has-text-grey">
                        <a class="has-text-grey" href="../index.php">Ya tiene una cuenta? Inicie sesión</a> <!--&nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>-->
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <script src="../JS/eventos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
