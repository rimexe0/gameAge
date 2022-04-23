<?php
if (isset($_SESSION['id'])) {
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
  include("companents/bigDisplay.php");

  ?>
  <h1 class='display-5  mt-5 ms-6'>Top Sellers</h1>
  <div id="carouselExampleIndicators" class="" data-bs-ride="">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="top-seller row align-items-center">
        <div class="col-4">
          <?php BDTopSellerThumbs()?>
        </div>
        <div class="col">
        <?php BDTopSellerBig()?>

      </div>
    </div>
    <div class="carousel-item">
    kys
    </div>
    <div class="carousel-item">
    kys
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script>
   $('#img-thumb1').mouseenter(function() {
        alert ("hello");
        $('.kys').fadeIn(200).attr('src', 'https://rime.s-ul.eu/sJQeng2o');
        $('.img-big-game-desc').text(`die`);
      });
  </script>
  
</body>

</html>