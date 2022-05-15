<?php 

  session_start();
  
  
  
  if($_SESSION['user_name'] !== 'joe'){
    // isn't admin, redirect them to a different page
    header("Location: /index.php");
  }


 ?>
<!DOCTYPE html>
<html lang="">
 <?php include_once("companents/head.php"); ?>
  <body>
    <?php 
    include("companents/navbar.php") ;
    
   
    ?>
    <div class=" row justify-content-center mt-5">
      <div class="col-12 col-lg-4  card-form mx-3">
      <p class="display-5 text-center dark-text">Oyun Ekle</p>
  <form method='post' action='addGames.php'class="form" >
        <input type='text' class='form-control my-3' id='gameID'  placeholder='gameID' name='gameID'>
        <input type='text' class='form-control my-3' id='gameName'  placeholder='gameName' name='gameName' maxlength='50'>
<textarea name='gameDesc' class='form-control my-3' id='' cols='64' rows='5' placeholder='gameDesc' maxlength='1024'></textarea>
<input type='text' class='form-control my-3' id='gamePrice'  placeholder='gamePrice' name='gamePrice'>

<input type='text' class='form-control my-3' id='gameImage'  placeholder='gameImage' name='gameImage' maxlength='50'>
<input type='text' class='form-control my-3' id='gamePublisher'  placeholder='gamePublisher' name='gamePublisher' maxlength='50'>
<input type='date' class='form-control my-3' id='gameDate'   name='gameDate'>
<input type='text' class='form-control my-3' id='gameLikes'  placeholder='gameLikes' name='gameLikes'>
<input type='text' class='form-control my-3' id='gameDislikes'  placeholder='gameDislikes' name='gameDislikes'>

    <button type='submit' class='btn button'>Oyun Ekle</button>
  </form>
      </div>
     
      <div class="col-12 col-lg-4  card-form mx-3">
      <p class="display-5 text-center dark-text">Tag Ekle</p>
      <form method='post' action="addTags.php" class="form" >
    <input type="text" class='form-control my-3' name='tagID' placeholder="tagid">
    <input type="text" class='form-control my-3' name='tagName' placeholder="tagname">
    <button type="submit" class="btn button">Tag Ekle</button>
  </form>
  <div class="form">
  <h1 class="display-6 dark-text">Tag silmek için üstüne tıkla</h1>
  <?php get_all_tags_admin();?>
  </div>
  
      </div>
    

    <div class="col-12 col-lg-4  card-form mx-3">
      <p class="display-5 text-center dark-text">Resim Ekle</p>
      <form method='post' action="addGameImages.php" class="form" >
    <input type="text" class='form-control my-3' name='ImageID' placeholder="Imageid">
    <input type="text" class='form-control my-3' name='Image' placeholder="image">
    <input type="text" class='form-control my-3' name='gameID' placeholder="gameid">
    <button type="submit" class="btn button">Resim Ekle</button>
  </form>
      
      <div class="form">
  <h1 class="display-6 dark-text">resim silmek için üstüne tıkla</h1>
  <div class="row ">
  <?php get_all_images_admin();?>
  </div>
  </div>
  </div>
    </div>
    </div>
    <div class="center">
    <div class="game-list row mt-5 justify-content-center">
      
      <?php get_games_admin()?>
    </div>
    </div>
   
    <?php   include("companents/footer.php");
    include 'companents/scripts.php';?>
   
   
  </body>
</html>
    