<?php 


  include ("config.php");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  (int)$tagId=(int)$_POST['tagID'];
  $tagName=$_POST['tagName'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $sql = "INSERT INTO tags (tagID, tagNAME)
  VALUES ($tagId, '$tagName')";
  
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