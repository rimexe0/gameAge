<?php 


  include ("config.php");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  (int)$gameID=(int)$_POST['gameID'];
  $gameName=$_POST['gameName'];
  $gameDesc=$_POST['gameDesc'];
  $gameTags=1;
  $gameImage=$_POST['gameImage'];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $sql = "INSERT INTO games (gameID, gameName,gameDesc, tags,gameImage)
  VALUES ($gameID, '$gameName', '$gameDesc', '$gameTags','$gameImage')";
  
  if ($conn->query($sql) === TRUE) {
    header('Location: main.php'); //If book.php is your main page where you list your all records
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  
    }
  else
  echo "ur suck lol";


 


?>