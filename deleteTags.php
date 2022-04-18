<?php 
 include ("config.php");
 include ("selecGames.php");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$tagID = $_GET['tagID'];
   
 $sql = "DELETE FROM tags WHERE tagID=$tagID";
 

 if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "ok"; 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>