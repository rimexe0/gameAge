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
              echo "<div class='col-xl-3 col-sm-12' onclick='showgame.php'>";
              echo " <div class='card' style='width: 18rem;'>";
              echo "   <a href='deleteGames.php?gameId=".$gameId."' value='$gameId' class='btn btn-del'><i class='bi bi-trash3'></i></a>";
             echo "  <img src='$gameImage' class='card-img ' alt='$gameName'>" ;
            echo "   <div class='card-body'>";
              echo"   <h5 class='card-title'> $gameName</h5>";
              get_tags($gameId);
              echo "<br>";
              echo " </div>";
           echo "  </div>";
           echo "  </div>";
            }
          
           }
      } 
}
function get_tags($gameid){
  include ('config.php');
  $sql2 = "SELECT * FROM tags where gameID=$gameid";
  $result = $conn->query($sql2);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<span class='top-seller-tag'>".$row['tagNAME']."</span>";

}
}
}
