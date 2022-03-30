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
        <nav class="navbar navbar-expand-lg navbar-dark" style="font-family: montserrat; background: #061CF4; font-size: 15px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-family: lobster; font-size: 25px;">DeafMute.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="leccion.php">Lecciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Alfabeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Numeracion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="vocabulario.php">Vocabulario</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Ver perfil (padre/tutor)</a></li>
                            <li><a class="dropdown-item" href="perfil.php">Ver perfil (niño)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="Home.php">Cerrar Sesion</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>   
    </header><br>
    
    <!--INFO DEL USUARIO-->
    <div class="container">
        <div class="info">
            <h2>Perfil de Usuario</h2>
        </div><br>
        <div class="row">
            <div class="col-md-3">
                <img src="recursos/img/iconos/perfil.png" alt="perfil"><br><br>
                <button class="btn btn-primary"> Subir una foto de perfil</button>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="TecnoTeam2.0"><br>
                <label for="exampleFormControlInput1" class="form-label">Nombre de Usuario</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="TecnoTeam@123"><br>
                <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="tecnoteam@gmail.com"><br>
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Edad</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="11 años"><br>
                <label for="exampleFormControlTextarea1" class="form-label">Gustos</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">dinosaurios, colores vivos como el azul, morado</textarea><br><br>
                <button class="btn btn-success" rows="4">Guardar</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <!--FOOTER-->
    <div class="pie_pagina">
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