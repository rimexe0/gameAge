<?php 
if(isset($_SESSION['id'])){
    session_start();
    }
    
 ?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>pls dont sue me steam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/splide.min.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>

<body>
    <?php
    include("companents/navbar.php");

    include("selecGames.php");
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://rime.s-ul.eu/xeU5RBP5" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://rime.s-ul.eu/xeU5RBP5" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://rime.s-ul.eu/xeU5RBP5" class="d-block " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

</body>

</html>