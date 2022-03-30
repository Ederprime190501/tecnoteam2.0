<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>DeafMute.com</title>
    <link rel="shortcut icon" href="recursos/img/iconos/logotipo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="recursos/css/vocabulario.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
   
   <!--ENCABEZADO / MENU DE NAVEGACIÓN-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="font-family: montserrat; background: #061CF4; font-size: 15px; width:100%;">
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
                            <a class="nav-link active" aria-current="page" href="#">Lecciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Alfabeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Numeracion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Vocabulario</a>
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
    
    <div style="margin-left: 20px;" class="vocabulario">
       <h3 style="font-family: montserrat; font-size: 20px;">Categorias de Vocabulario.</h3><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/hogar.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: montserrat; font-size: 17px;">Categoria 1: Hogar</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre elementos basicos del hogar
                            <a class="btn btn-primary" href="hogarVocabulario.php" role="button">Empezar ya!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/familia.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: montserrat; font-size: 17px;">Categoria 2: Familia</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre a familia
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/animales.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: montserrat; font-size: 17px;">Categoria 3: Animales</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre animalesr
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/alimentos.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"style="font-family: montserrat; font-size: 17px;">Categoria 4: Alimentos</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample3">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre alimentos
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/colores.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"style="font-family: montserrat; font-size: 17px;">Categoria 5: Colores</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample4">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre los colores
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/deportes.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"style="font-family: montserrat; font-size: 17px;">Categoria 6: Deportes</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample5">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre deportes
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/escuela.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"style="font-family: montserrat; font-size: 17px;">Categoria 7: Escuela</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample6">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobre la escuela
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="recursos/img/categorias/transportes.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"style="font-family: montserrat; font-size: 17px;">Categoria 8: Transportes</h5>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Empezar
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample7">
                            <div class="card card-body">
                            Aqui podras aprender vocabulario con Lenguaje de Señas Mexicano sobrelos transportes
                            <button class="btn btn-primary">Comenzar Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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