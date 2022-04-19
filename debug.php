<?php 
if(isset($_SESSION['id'])){
    session_start();
    }
    
 ?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>pls dont sue me steam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/splide.min.css">
</head>

<body>
    <?php
    include("companents/navbar.php");

    include("selecGames.php");
    ?>
    <div class="mx-auto mt-5">
        <div class="row mx-auto games-page ">
            <div class="col "><img src="https://rime.s-ul.eu/jQwkOLvP" class="img-fluid games-page-img" alt="...">
                <div class="mt-2"><span class='top-seller-tag'>".$row['tagNAME']."</span></div>
            </div>
            <div class="col">
                <h1 class="display-2">osu</h1>
                <div><span class="mx-3"><i class="bi bi-hand-thumbs-up-fill"></i>333</span><span class="mx-3"><i class="bi bi-hand-thumbs-down-fill"></i>666</span></div>
            </div>

        </div>
        <div class="mx-auto games-page mt-5 ">
            <p class="lead ">Glasses are really versatile. First, you can have glasses-wearing girls take them off and suddenly become beautiful, or have girls wearing glasses flashing those cute grins, or have girls stealing the protagonist's glasses and putting them on like, "Haha, got your glasses!' That's just way too cute! Also, boys with glasses! I really like when their glasses have that suspicious looking gleam, and it's amazing how it can look really cool or just be a joke. I really like how it can fulfill all those abstract needs. Being able to switch up the styles and colors of glasses based on your mood is a lot of fun too! It's actually so much fun! You have those half rim glasses, or the thick frame glasses, everything! It's like you're enjoying all these kinds of glasses at a buffet. I really want Luna to try some on or Marine to try some on to replace her eyepatch. We really need glasses to become a thing in hololive and start selling them for HoloComi. Don't. You. Think. We. Really. Need. To. Officially. Give. Everyone. Glasses?</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

</body>

</html>