<?php 
function gameCount(){
    include ('config.php');
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
      }
      $sql = 'SELECT COUNT(gameID) FROM games';
    $result = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($result)['COUNT(gameID)'];
    return $count;
}

function get_games() {
    include ('config.php');
    $sql2 = 'SELECT * FROM games';
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $gameId = $row['gameID'];
            $gameName= $row['gameName'];
            $gameDesc= $row['gameDesc'];  
            $gameImage= $row['gameImage'];
            if($gameId==0)
            {}
            else{
              
              echo "<div class='col-xl-3 col-sm-12' data-bs-toggle='modal' data-bs-target='#game_$gameId'>";
              echo " <div class='card' style='width: 18rem;'>";
             
              echo "   <a href='selectedGame.php?gameId=".$gameId."' value='$gameId' class='card-title'>";
              echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
              echo "<div class='carousel-inner'>";
              echo " <div class=' carousel-item active card-img '>" ;
              echo "  <img src='$gameImage' class='card-img'  alt='$gameName'>" ;
              echo "</div>";
              get_gameImages($gameId);
              echo "</div>";
              echo "</div>";
              
            echo "   <div class='card-body'>";
              echo"   <h5 class='card-title'> $gameName</h5>";
              get_tags($gameId);
              echo "<br>";
              echo "</a>";
              echo " </div>";
           echo "  </div>";
          
           
           echo "  </div>";
           
           

           
            }
          
           }
      } 
}
function get_gameImages($gameid) {
  include ('config.php');
  $sql = "SELECT * FROM gameImages where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo " <div class='carousel-item'>
        <img src='".$row['Image']."' class='card-img' alt='...'>
      </div>";

}
}
}
function get_games_admin() {
  
  include ('config.php');
  $sql2 = 'SELECT * FROM games';
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $gameId = $row['gameID'];
          $gameName= $row['gameName'];
          $gameDesc= $row['gameDesc'];  
          $gameImage= $row['gameImage'];
          if($gameId==0)
          {}
          else{
            
            echo "<div class='col-xl-3 col-sm-12' data-bs-toggle='modal' data-bs-target='#game_$gameId'>";
            echo " <div class='card' style='width: 18rem;'>";
            
            echo "   <a href='deleteGames.php?gameId=".$gameId."' value='$gameId' class='btn btn-del'><i class='bi bi-trash3'></i></a>";
            echo "   <a href='selectedGame.php?gameId=".$gameId."' value='$gameId' class='card-title'>";
            echo "<div id='carouselExampleSlidesOnly' class='carousel slide' data-bs-ride='carousel'>";
            echo "<div class='carousel-inner'>";
            echo " <div class=' carousel-item active card-img '>" ;
            echo "  <img src='$gameImage' class='card-img' alt='$gameName'>" ;
            echo "</div>";
            get_gameImages($gameId);
            echo "</div>";
          echo "</div>";
          
          echo "   <div class='card-body'>";
            echo"   <h5 class='card-title'>$gameId | $gameName</h5>";
            get_tags($gameId);
            echo "<br>";
            echo "</a>";
            echo " </div>";
         echo "  </div>";
        
         
         echo "  </div>";
         

         
          }
        
         }
    } 
}
function get_tags($gameid){
  include ('config.php');
  $sql = "SELECT * FROM tags where gameID=$gameid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<span class='top-seller-tag' ".$row['tagID']."'>".$row['tagNAME']."</span>";

}
}
}
function get_all_tags_admin(){
  include ('config.php');
  $sql = "SELECT * FROM tags ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $tagID = $row['tagID'];
        echo "<span class='top-seller-tag' ".$row['tagID']."'><a href='deleteTags.php?tagID=".$tagID."'>".$row['tagNAME']."</a></span>";

}
}
}
function selected_game_page(){
  include ('config.php');
  $sql = 'SELECT * FROM games';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $gameId = $row['gameID'];
          $gameName= $row['gameName'];
          $gameDesc= $row['gameDesc'];  
          $gameImage= $row['gameImage'];
          if($gameId==0)
          {}
          else{
           echo "<div class='modal fade' id='game_$gameId' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
           <div class='modal-dialog modal-fullscreen'>
             <div class='modal-content'>
               <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>$gameName</h5>
                 <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
               </div>
               <div class='modal-body'>
               $gameDesc
               <img src='$gameImage' class='card-img ' alt='$gameName'>
               </div>
               <div class='modal-footer'>
                 <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                 <button type='button' class='btn btn-primary'>Save changes</button>
               </div>
             </div>
           </div>
         </div>";
          }
        
         }
    } 
}

