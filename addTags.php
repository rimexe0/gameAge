<?php 


  include ("config.php");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  (int)$tagId=(int)$_POST['tagID'];
  $tagName=$_POST['tagName'];
  (int)$gameID=(int)$_POST['gameID'];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $sql = "INSERT INTO tags (tagID, tagNAME,gameID)
  VALUES ($tagId, '$tagName', '$gameID')";
  
  if ($conn->query($sql) === TRUE) {
echo "ok";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  
    }
  else
  echo "something happend. Prob. db issue";


 


?>