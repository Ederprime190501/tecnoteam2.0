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
              <a class="nav-link active btn btn-light" style="color:black; margin-right: 5px;" aria-current="page" href="registro.php">Registrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn btn-success" aria-current="page" style="margin-right: 5px;" href="login.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>   
        </header>
        
    <!--CARUSEL DE IMAGENES-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="recursos/img/slider1.PNG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: #4F00E6; font-family: lobster; font-size: 50px;">Con DeafMute.com</h2>
            <p class="h5" style="color: #4F00E6;">"Aqui podras recibir una excelente capacitación para niños con discapacidad auditiva."</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="recursos/img/slider2.PNG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="recursos/img/slider3.PNG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: #4F00E6; font-family: lobster; font-size: 50px;">Con DeafMute.com</h2>
            <p class="h5" style="color: #4F00E6;">"Aqui podras recibir una excelente ayuda para que niños con discapacidad auditiva puedan integrarse mejor."</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <!--DIVISOR DE SECCIONES-->
    <div class="divisor" style="background: #4F00E6;">
        <h3 style="font-family: montserrat; font-size: 20px;">!Disfruta de todas nuestras secciones de aprendizaje!</h3>
    </div><br>
    
    <!--SECCIONES DE LA APLICACION-->
    <div class="secciones">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem; height: 24rem;">
                   <div class="card-header">
                    Juegos
                    </div>
                    <img src="recursos/img/secciones/juegos.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">En esta seccion podras aprender Lenguaje de Señas a traves de nuestros juegos didacticos.</p>
                        <a href="#" class="btn btn-primary" style="background: #4F00E6;">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem; height: 24rem;">
                   <div class="card-header">
                    Lecciones
                    </div>
                    <img src="recursos/img/secciones/Lecciones.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">En esta seccion podras aprender Lenguaje de Señas a traves de nuestras lecciones de aprendizaje.</p>
                        <a href="#" class="btn btn-primary" style="background: #4F00E6;">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem; height: 24rem;">
                   <div class="card-header">
                    Alfabeto
                    </div>
                    <img src="recursos/img/secciones/alfabeto.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">En esta seccion podras aprender el alfabeto pero en Lenguaje de Señas Mexicano.</p>
                        <a href="#" class="btn btn-primary" style="background: #4F00E6;">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem; height: 24rem;">
                   <div class="card-header">
                    Vocabulario
                    </div>
                    <img src="recursos/img/secciones/vocabulario.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">En esta seccion podras aprender el Lenguaje de Señas Mexicano mediante nuestro vocabulario.</p>
                        <a href="#" class="btn btn-primary" style="background: #4F00E6;">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    
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