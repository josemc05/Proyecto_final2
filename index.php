<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <link rel="stylesheet" type="text/css" href="CSS/maquillaje.css">
</head>

<body>
    
    <header>
        <section class="navega">
              <nav>
                
                  <img class="utp" src="IMG/att.png" alt="">
                  <img class="att" src="IMG/logo_utp.png" alt="">
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
                    <h3 class="title has-text-black">Bienvenido</h3>
                    <p class="subtitle has-text-black">Ingrese al sistema</p>
                    <hr class="login-hr">
                    <div class="box">
                        <figure class="avatar">
                            <img class="tamaño" src="IMG/user.png">
                        </figure>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Usuario" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                  <input type="checkbox">
                  Recordar
                </label>
                            </div>
                            <button style="background-color: #4B2E83;" class="button is-block is-info is-large is-fullwidth">ACCEDER <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="Registro.php">Crear cuenta</a> <!--&nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>-->
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>
