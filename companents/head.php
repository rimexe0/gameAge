<?php 
include_once("config.php");
include_once("selecGames.php");
if(isset($_SESSION['id'])){
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

}


?>


<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/splide.min.css">
<title>pls don't sue me steam</title>
  </head>