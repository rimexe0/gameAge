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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered ">
    <div class="modal-content navbar-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ÖNEMLİ UYARI</h5>
        
      </div>
      <div class="modal-body">
        BU WEBSİTESİ SADECE EĞİTİM AMAÇLI YAPILMIŞTIR TİCARİ HİÇ BİR AMACI YOKTUR.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn button" data-bs-dismiss="modal">Tamam</button>
        
      </div>
    </div>
  </div>
</div>
    
    <div class="center">
    
    <div class="game-list row mt-5">
    <h1 class="display-1">Oyunlar Listesi</h1>
    <h1 class="display-6">Oyunların herhangi birine tıklayarak oyun hakkında detaylara ulaşabilirsin.</h1>

      <?php
     
      get_games();
      ?>
    </div>
    </div>
    
   <!-- Button trigger modal -->
<button type="button" class="btn warning" id="warning-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  ÖNEMLİ UYARI
</button>
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
$("#warning-button").click(function(){
  $("#warning-button").remove();
});
    </script>
  
  </body>

</html>
    