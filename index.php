
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dr.LET</title>
  <link rel="stylesheet" href="Public/css/bootstrap.min.css">


</head>
<?php
include_once("plantilla.html");
?>    
<body>
<div class="container" style="width: 1400px; height: 700px; padding-top: 70px; ">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Public/Imagen/osletcare1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Dermatitis</h5>
              <p>Dermatitis aguda</p>
              </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Public/Imagen/osletcare2.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Piel enrojezida</h5>
              <p>Piel seca</p>
              </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Public/Imagen/osletcare3.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Trtamiento de acne</h5>
              <p>Limpeza</p>
              </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Public/Imagen/osletcare1.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
              <h5>Limpieza facial</h5>
              <p>Consulta</p>
              </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<script src="Public/js/jquery-3.3.1.min.js"></script>
<script src="Public/js/bootstrap.min.js"></script>
</body>
</html>