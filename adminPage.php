<?php 

  session_start();
  
  
  
  if($_SESSION['user_name'] !== 'joe'){
    // isn't admin, redirect them to a different page
    header("Location: /index.php");
  }


 ?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>admin page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/splide.min.css">
  </head>
  <body>
    <?php 
    include("companents/navbar.php") ;
    
    include("selecGames.php");
    ?>
    <div class="row">
      <div class="col">
      <p class="display-5 text-center">Oyun Ekle</p>
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
     
      <div class="col">
      <p class="display-5 text-center">Tag Ekle</p>
      <form method='post' action="addTags.php" class="form" >
    <input type="text" class='form-control my-3' name='tagID' placeholder="tagid">
    <input type="text" class='form-control my-3' name='tagName' placeholder="tagname">
    <button type="submit" class="btn button">Tag Ekle</button>
  </form>
  <div class="form">
  <h1 class="display-6">Tag silmek için üstüne tıkla</h1>
  <?php get_all_tags_admin();?>
  </div>
  
      </div>
    

    <div class="col ">
      <p class="display-5 text-center">Resim Ekle</p>
      <form method='post' action="addGameImages.php" class="form" >
    <input type="text" class='form-control my-3' name='ImageID' placeholder="Imageid">
    <input type="text" class='form-control my-3' name='Image' placeholder="image">
    <input type="text" class='form-control my-3' name='gameID' placeholder="gameid">
    <button type="submit" class="btn button">Resim Ekle</button>
  </form>
      
      <div class="form">
  <h1 class="display-6">resim silmek için üstüne tıkla</h1>
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
   
    <?php   include("companents/footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
   
  </body>
</html>
    