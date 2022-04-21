<?php

    include("config.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $gameID = $_POST['gameId'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Submit'])) {
            if (!empty($_POST['taglist'])) {
                $selected = $_POST['taglist'];
                (int)$tagId = (int)$selected;
                
    
                $sql = "INSERT INTO gametaglist (tagID, GameID) VALUES ($tagId, '$gameID')";
    
                if ($conn->query($sql) === TRUE) {
                    header("Location: adminPage.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
    
                $conn->close();
            } else
                echo "something happend. Prob. db issue";
        } else {
            echo 'Please select the value.';
        }
    }
    


