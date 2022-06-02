<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web streaming de peliculas">
    <meta name="author" content="Freddy Muñoz">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Films+</title>
</head>
<body class="body-home">
    <header class="d-flex justify-content-between align-items-center header-home p-4">
      <div>
        <a href="index.html" class="text-decoration-none"><h4 class="d-flex justify-content-center align-items-center text-white ps-4">Films+</h4></a>
      </div>
      <div class="w-100 d-flex justify-content-center align-items-center">
        <ul class="nav w-75 nav-pills nav-fill d-flex justify-content-between align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i>&nbsp;Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="bi bi-camera-reels-fill"></i>&nbsp;Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="bi bi-star-fill"></i>&nbsp;Estrenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white"><i class="bi bi-search"></i>&nbsp;Busqueda</a>
          </li>
        </ul>
      </div>
      <div class="p-4">
        <a href="login-page.php" class="d-flex justify-content-center align-items-center text-decoration-none"><img src="img/user.png" alt="">&nbsp;<i class="bi bi-caret-down-fill text-white"></i></a>
        <button class="ms-5"></button>
      </div>
    </header>
    <section class="header-nav-home"></section>
    <section id="portada" class="d-flex justify-content-center align-items-center">
      <div class="bg-dark w-100">
        <h4 class="text-white">Hola</h4>
      </div>
    </section>
    <main class="d-flex w-100 justify-content-around align-items-right main-home">
        <div class="border rounded d-flex justify-content-center align-items-center card-home"><img src="img/pixar.png" alt="" class="card-pixar"></div>
        <div class="border rounded d-flex justify-content-center align-items-center card-home"><img src="img/paramount.svg" alt="" class="card-paramount"></div>
        <div class="border rounded d-flex justify-content-center align-items-center card-home"><img src="img/warner-card.png" alt="" class="card-warner"></div>
        <div class="border rounded d-flex justify-content-center align-items-center card-home"><img src="img/marvel-card.png" alt="" class="card-pixar"></div>
        <div class="border rounded d-flex justify-content-center align-items-center card-home"><img src="img/disney-plus-logo.png" alt="" class="card-pixar"></div>
    </main>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Recomendados para ti</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Novedades en Films+</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Estrenos</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Marvel</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Pixar</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Disney</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen2.jpg" alt="">
          <img class="card-films" src="img/imagen1.jpg" alt="">
          <img class="card-films" src="img/imagen3.jpg" alt="">
        </div>
    </section>
    <footer id="foot" class="d-flex flex-column text-secondary align-items-right justify-content-end p-5">
      <div class="d-flex justify-content-center align-items-center text-white">
        <h2 class="fs-1">Films+</h2>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-3">
        <ul class="d-flex justify-content-center align-items-center flex-row navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#foot">Terminos de uso</a></li>
          <li class="nav-item ms-5"><a class="nav-link" href="#foot">Policita de privacidad</a></li>
          <li class="nav-item ms-5"><a class="nav-link" href="#foot">Publicidad personalizada</a></li>
          <li class="nav-item ms-5"><a class="nav-link" href="#foot">Dispositivos compatibles</a></li>
          <li class="nav-item ms-5"><a class="nav-link" href="#foot">Ayuda</a></li>
          <li class="nav-item ms-5"><a class="nav-link" href="#foot">Acerca de Diseny+</a></li>
        </ul>
      </div>
      <div class="mt-4 d-flex justify-content-center align-items-center"> ©2022 Films+ Todos los derechos Reservados</div>
    </footer>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>