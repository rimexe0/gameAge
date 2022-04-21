<?php 


  include ("config.php");
  include("selecGames.php");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  (int)$gameID=(int)$_POST['gameID'];
  $gameName=$_POST['gameName'];
  $gameDesc=$_POST['gameDesc'];
  $gamePublisher=$_POST['gamePublisher'];
  $gameDate=$_POST['gameDate'];
  $gameLikes=$_POST['gameLikes'];
  $gameDislikes=$_POST['gameDislikes'];
  $gameImage=$_POST['gameImage'];
  $gamePrice=$_POST['gamePrice'];
  

 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $sql = "INSERT INTO games (`gameID`, `gameName`, `gameDesc`, `gamePublisher`, `gameDate`, `gameLikes`, `gameDislikes`, `gameImage`, `gamePrice`)
                     VALUES ('$gameID', '$gameName', '$gameDesc', '$gamePublisher', '$gameDate', '$gameLikes', '$gameDislikes', '$gameImage', '$gamePrice')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: adminPage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  
    }
  else
  echo "something happend. Prob. db issue";


 


?>