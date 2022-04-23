<?php 
if(isset($_SESSION['id'])){
session_start();
}


?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>pls dont sue me steam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/splide.min.css">
  </head>
  <body >
  
    <?php 
    include("companents/navbar.php") ;
   // include("companents/bigDisplay.php");
    
  
    ?>
    
    <div class="center">
    
    <div class="game-list row mt-5">
    <h1 class="display-1">Arama Sonuçları</h1>
      <?php
       $tagID = $_GET['tagID'];
      
      get_games_filtered($tagID);
      ?>
    </div>
    </div>
    
   
    <?php   include("companents/footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script>
$(".tag-list").on('wheel',(function(){
  var $scroll;
 
    
  $scroll+=300;
  
  
  $( ".tag-list" ).scrollLeft( $scroll);
}));
$(".tag-list").mouseleave(function(){
 
});

    </script>
   
  </body>

</html>
    