<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>My Pet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="mypet/css/home_style.css">
    <link rel="stylesheet" href="mypet/css/navbar_style.css">
  </head>
  <body>
    <div class="container_main">
      <?php require_once("navbar.php"); ?>
      <div class="jumbotron text-center">
        <h1>My Pet</h1>
        <p>Os nossos maiores companheiros estão aqui! </p>
      </div>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
          <li data-target="#demo" data-slide-to="5"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="mypet/img/cat1.jpg" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mypet/img/cat2.jpg" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mypet/img/cat3.png" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mypet/img/dog1.jpg" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mypet/img/dog2.jpg" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mypet/img/dog3.jpg" alt="" width="60%" height="500">
            <div class="carousel-caption">
              <h3>Lorem ipsum </h3>
              <p>Lorem ipsum</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>

    <div class="container_main">
      <div class="jumbotron text-center">
        <h1>Adoção</h1>
        <p>Adote um amiguinho, você não vai se arrepender!</p>
      </div>
    </div>

    <div class="container_main">
      <div class="jumbotron text-center">
        <h1>Sobre nós</h1>
        <p>Conheça um pouco do nosso projeto! </p>
      </div>
    </div>

    <div class="container_main">
      <div class="jumbotron text-center">
        <h1>Doação</h1>
        <p>Ajude nossos amiguinhos a distancia! </p>
      </div>
    </div>

    <div class="container_main">
      <div class="jumbotron text-center">
        <h1>Localização</h1>
        <p>Venham conhecer nosso abrigo de pets! </p>
      </div>
    </div>

    <div class="container_main">
      <div class="jumbotron text-center">
        <h1>Fale conosco</h1>
        <p>Um pet se precisa de ajuda é sempre bem vindo! </p>
      </div>
    </div>
  </body>
</html>
