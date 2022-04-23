<?php 
 include ("config.php");
 include ("selecGames.php");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$tagID = $_GET['tagID'];
$GameID = $_GET['GameID'];
   
 $sql = "DELETE FROM gametaglist WHERE tagID=$tagID and GameID=$GameID";
 

 if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: adminPage.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>