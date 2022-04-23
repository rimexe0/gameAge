<?php 

function BDTopSellerThumbs(){
  include('config.php');
  $sql = "SELECT * FROM games ORDER BY gameID DESC LIMIT 3";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $count=0;
    while ($row = $result->fetch_assoc()) {
      $count++;
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      echo "
      <img src='$gameImage' class='img-thumb ' id='img-thumb$count'  alt='ltg'>";
    }
  }
}
function BDTopSellerBig(){
  include('config.php');
  $sql = "SELECT * FROM games ORDER BY gameID DESC LIMIT 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $count=0;
    while ($row = $result->fetch_assoc()) {
      $count++;
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      echo "
    
          
            <img src='$gameImage' alt='' class='img-big kys' id='kys'>
          </div>
          <div class='col align-self-start'>
            <h1 class='display-5'>$gameName</h1>
            <a href='selectedGame.php?gameId=" . $gameId . "' value='$gameId' class='btn button'>Sayfaya git</a>
            <p class='lead img-big-game-desc'>$gameDesc</p>
            
          
       ";
    }
  }
}
function BDTopSellerJS(){
  include('config.php');
  $sql = "SELECT * FROM games ORDER BY gameID DESC LIMIT 3";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $count=0;
    while ($row = $result->fetch_assoc()) {
      $count++;
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      echo "
      $('#img-thumb$count').mouseenter(function() {
        
        $('#img-big').fadeIn(200).attr('src', 'images/csgo.png');
        $('.img-big-game-desc').text(`$gameDesc`);
      });
      ";
    }
  }
}




?>