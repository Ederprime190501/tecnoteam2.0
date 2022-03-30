<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>DeafMute.com</title>
    <link rel="shortcut icon" href="recursos/img/iconos/logotipo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/css/estilos.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
   
   <!--ENCABEZADO / MENU DE NAVEGACIÓN-->
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="font-family: montserrat; background: #4F00E6; font-size: 15px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-family: lobster; font-size: 25px;">DeafMute.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Home.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contactanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn btn-light registro" style="color:black; margin-right: 5px;" aria-current="page" href="#">Registrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn btn-success" aria-current="page" style="margin-right: 5px;" href="login.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>   
        </header>
    <main role="main">     
      <div class="container" style="margin-top:20px"> 

        <div class="card">
          <h4 class="card-header"><strong>Formulario de registro</strong></h4>              
          <div class="card-body">
            <form method="post" action="login.php">              
              <div class="row">
                <div class="col-md-3"> 
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" required="required">
                  </div>
                </div>
                <div class="col-md-3"> 
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su correo electrónico" required="required">
                  </div> 
                </div>    
                <div class="col-md-3"> 
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Escriba su nombre de usuario" required="required">
                  </div>
                </div>
                <div class="col-md-3"> 
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Escriba su clave de acceso" required="required" pattern="^[A-Z]{1}[0-9]{1}[a-z]+[0-9]{1}[$]+$" title="Debe empezar con una letra en mayuscula, un numero y cierta cantidad de lestras minusculas, al final debe terminar con un numero y un signo de pesos ejemplo (E8der9$)">
                  </div>
                </div>
              </div>                  
              <hr>
              <button type="submit" name="remitir" value="remitir" title="Quiero registrarme." class="btn btn-primary">Registrarse</button>  
            </form>
          </div>
        </div>
      </div> <!-- /container -->

    </main><br><br><br><br><br><br><br><br><br>
    <!--FOOTER-->
    <div class="pie_pagina" style="background: #4F00E6;">
        <div class="row">
            <div class="col-sm-6">
                Copyright@ TecnoTeam 2.0 2022-1<br>
                DeafMute_19@gmail.com<br>
                (55) 65747483
            </div>
            <div class="col-sm-6">
                <img src="recursos/img/iconos/whatsapp.png" alt="">
                <img src="recursos/img/iconos/instagram.png" alt="">
                <img src="recursos/img/iconos/facebook.png" alt="">
            </div>
        </div>
    </div>
    
    
    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="recursos/bootstrap/js/jquery-3.5.1.min.js"></script>
</body>
</html>