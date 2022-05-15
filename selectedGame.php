<?php 
if(isset($_SESSION['user_name'])){
session_start();
}
else(
  
  $_SESSION['user_name'] = 'guest'
)

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("companents/head.php"); ?>

<body>
  <?php 
  include_once('companents/navbar.php');




  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $selectedGameId = $_GET['gameId'];

  $sql = "select * FROM games WHERE gameID=$selectedGameId";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $gameId = $row['gameID'];
      $gameName = $row['gameName'];
      $gameDesc = $row['gameDesc'];
      $gameImage = $row['gameImage'];
      $gamePublisher = $row['gamePublisher'];
      $gameDate = $row['gameDate'];
      $gamePrice = $row['gamePrice'];
      $gameLikes = $row['gameLikes'];
      $gameDislikes = $row['gameDislikes'];


      if ($gameId == 0) {
      } else {

        echo "<div class='mx-auto mt-5'>
        <div class='row mx-auto games-page '>
            <div class='col-12 col-lg-6 '>";
            echo "<div id='carouselExampleSlidesOnly' class='carousel slide games-page-img' data-bs-ride='carousel'>";
            echo "<div class='carousel-inner-img '>";
            echo " <div class=' carousel-item active  '>" ;
            echo "  <img src='$gameImage' class='games-page-img'  alt='$gameName'>" ;
            echo "</div>";
            get_gameImagesBig($gameId);
            echo "</div>";
            echo "</div>";
            
            
              echo "  <div class='mt-2'>";
        get_tags($gameId);
        echo "</div>
            </div>
            <div class='col'>
                <h1 class='display-2'>$gameName</h1>
                <h6 class='lead ms-3 mb-3'><b>$gamePublisher</b> tarafından yapıldı</h6>
                <h6 class='lead ms-3 mb-3'><b>$gameDate</b> Tarihinde yayınlandı</h6>";
        /*if ($gamePrice == 0) {
          echo " <span class='lead ms-3 mb-3'>FREE</span><span class='lead ms-3 mb-3'><a href='#' class='btn btn-primary button'>Play Now</a></span>";
        } else {
          echo "<span class='lead ms-3 mb-3'>$gamePrice TL</span><span class='lead ms-3 mb-3'><a href='#' class='btn btn-primary button'>Buy Now</a></span>";
        }*/

        echo "
                
               
            </div>

        </div>
        <div class='mx-auto games-page mt-5 '>
            <p class='lead '>$gameDesc</p>
        </div>
    </div>
";
      }
    }
  } 
  else{
    echo "<div class='mx-auto mt-5'>
        <div class='row mx-auto games-page '>
            <div class='col '>";
            echo "<div id='carouselExampleSlidesOnly' class='carousel slide games-page-img' data-bs-ride='carousel'>";
            echo "<div class='carousel-inner-img >";
            echo " <div class=' carousel-item active  '>" ;
            echo "  <img src='https://rime.s-ul.eu/xt8bvX9H' class='games-page-img'  alt=''>" ;
            echo "</div>";
           
            echo "</div>";
            echo "</div>";
            
            
              echo "  <div class='mt-2'>";
       
        echo "</div>
            </div>
            <div class='col'>
                <h1 class='display-2'>Oyun Bulunamadı.</h1>
                ";
     

        echo "
                
               
            </div>

        </div>
        <div class='mx-auto games-page mt-5 '>
            <p class='lead '></p>
        </div>
    </div>
";
  }
  
  include("companents/footer.php");
  include("companents/scripts.php");
  ?>
  
 
</body>

</html>