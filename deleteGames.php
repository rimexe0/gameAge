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
    header('Location: main.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>