<?php 


  include ("config.php");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  (int)$ImageID=(int)$_POST['ImageID'];
  $Image=$_POST['Image'];
  (int)$gameID=(int)$_POST['gameID'];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $sql = "INSERT INTO gameImages (ImageID, Image,gameID)
  VALUES ($ImageID, '$Image', '$gameID')";
  
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