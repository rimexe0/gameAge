<?php
if (isset($_SESSION['id'])) {
    session_start();
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Hakkımızda bölümü</title>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/splide.min.css">
</head>

<body>
    <div>
        <img src="images/bg.png" class="bg-image" alt="">
    </div>
    <?php include("companents/navbar.php"); ?>
    <div class="container form mb-5">
        <h1 class="display-1 my-5">Hakkımızda</h1>
        <h2 class="display-3 mb-5">Bir grup öğrenci oyunla ilgili bişeyler yaptık işte</h2>
        <h1 class="display-4">Celal IŞIK</h1>
        <h1 class="display-4">İbrahim ACAR</h1>
        <span class="display-4">Emir ÖZTÜRK</span>
        

        <p></p>
        <a href="#contact" class="btn button btn-lg float-end">iletişime geçin</a>
    </div>
    <div class=" centerY center " id="contact">

        <div class="container row  dark-text d-flex justify-content-center center">
            <div class="form col-12 col-lg-6 card-form mx-3 my-3">
                <h1 class="display-5 text-center ">İletişim Bilgileri</h1>
                <div class="box center-icons">
                    <div class="icon my-2"><i class="bi bi-geo-alt-fill me-3" aria-hidden="true"></i><span class="lead ms-1">someting something</span></div>
                    <div class="icon my-2"><i class="bi bi-telephone-fill me-3 " aria-hidden="true"></i><span class="lead ms-1">+90 555 555 55 55</span></div>
                    <div class="icon my-2"><i class="bi bi-envelope-fill me-3" aria-hidden="true"></i>
                        <span class="lead ms-1">emirozturk79@gmail.com</span>
                        <p class="lead ms-5">ibrahimacar2078@gmail.com</p>
                        
                    </div>
                </div>



            </div>
            <div class="form col-12 col-lg-6 card-form mx-3 my-3">
                <h1 class="display-5 text-center">Mesaj Gönder</h1>
                <form action="https://formspree.io/f/mgednqyb" method="POST">
                    <div class="form-group">
                        <label for="name" class="lead">Adınız</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Adınızı Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="email" class="lead">E-posta Adresiniz</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-posta Adresinizi Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="message" class="lead">Mesajınız</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn button mt-2 float-end">Gönder</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
</body>

</html>