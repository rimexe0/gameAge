
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/splide.min.css">
  <title>Document</title>
</head>
<body>
  <?php include('companents/navbar.php');
  
include ("config.php");
include ("selecGames.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$selectedGameId = $_GET['gameId'];
  
$sql = "select * FROM games WHERE gameID=$selectedGameId";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $gameId = $row['gameID'];
        $gameName= $row['gameName'];
        $gameDesc= $row['gameDesc'];  
        $gameImage= $row['gameImage'];
        if($gameId==0)
        {}
        else{
         echo "sex";
        }
      
       }
  } ?>
</body>
</html>
