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
              <a class="nav-link active btn btn-light registro" style="color:black; margin-right: 5px;" aria-current="page" href="registro.php">Registrate</a>
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
          <div class="card-body">
            <form  class="form-signin" method="post" action="index.php">
              <div class="row">
                <div class="col-md-4"> 
                </div>  
                <div class="col-md-4"> 
                  <img class="mb-4 rounded mx-auto d-block" src="recursos/img/lock.png" alt="" width="128" height="128">
                  <h4 class="h3 mb-3 font-weight-normal">Ingresar</h4>
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus><br>
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" required><br>
                  <button class="btn btn-lg btn-primary btn-block" 
                  type="submit" name="login" value="login">Entrar</button>
                  <p class="text-primary" style="font-size: small">¿Todavía no estas registrado? <a href="registro.php">Regístrate</a></p>
                </div>
                <div class="col-md-4"> 
                </div>
              </div>   
            </form>
          </div>
        </div>
      </div>
    </main><br>
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