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
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active text-center div-portada" data-bs-interval="10000">
              <img src="img/imagen3.jpg" class="d-block w-100 img-portada-slider" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
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
          <img class="card-films" src="img/imgpeliculas/disney1.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney2.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney5.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel1.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel4.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel5.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel5.JPG" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Novedades en Films+</div>
          <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imgpeliculas/cienciaficcion2.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney3.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney4.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/disney6.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel7.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel8.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/cienciaficcion3.JPG" alt="">
          </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Marvel</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films" src="img/imgpeliculas/marvel.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel1.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel7.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel3.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel4.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel5.JPG" alt="">
          <img class="card-films" src="img/imgpeliculas/marvel6.JPG" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Pixar</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films card-horizontal" src="img/imgpeliculas/pixar.JPG" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/pixar1.jfif" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/pixar3.jpg" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/pixar4.jfif" alt="">
        </div>
    </section>
    <section class="text-white section-home-1 d-flex justify-content-left flex-column">
        <div class="mb-3 fw-bolder fs-5">Peliculas de Disney</div>
        <div class="d-flex justify-content-between align-items-center">
          <img class="card-films card-horizontal" src="img/imgpeliculas/disney8.JPG" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/disney9.png" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/disney10.jfif" alt="">
          <img class="card-films card-horizontal" src="img/imgpeliculas/pixar4.jfif" alt="">
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