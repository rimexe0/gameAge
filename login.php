<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/splide.min.css">

	<title>Login</title>
</head>

<body>
<?php 
    include("companents/navbar.php") ;
    ?>
<img src="images/bg.png" class="bg-image" alt="">
	<form action="authenticate.php" method="post" class="form card-form mt-5 form-group ">
		<h2 class="  display-3 dark-text ">Giriş Yap</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input type="text" class="form-control" name="uname" placeholder="Kullanıcı Adı"><br>

		<input type="password" class="form-control" name="password" placeholder="Şifre"><br>

		<button type="submit" class="btn button float-end">Giriş Yap</button>
		
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>

</html>