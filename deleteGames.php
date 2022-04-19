<?php 
 include ("config.php");
 include ("selecGames.php");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$gameId = $_GET['gameId'];
   
 $sql = "DELETE FROM games WHERE gameID=$gameId";
 

 if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: adminPage.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>