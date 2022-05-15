
<!DOCTYPE html>
<html lang="">
<?php include_once("companents/head.php"); ?>
  <body >
    <?php 
    include_once("companents/navbar.php") ;
    include_once("companents/warning.php");
    ?>




    
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
    <?php   
    include_once("companents/footer.php");
    include_once 'companents/scripts.php'
    ?>
   
  
  </body>

</html>
    