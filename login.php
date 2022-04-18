<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.css">k
    <title>Document</title>
</head>
<body>
  

<form action="authenticate.php" method="post" class="form">
     	<h2 class="label">Giriş Yap</h2>
     	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" class="form-control" name="uname" placeholder="Kullanıcı Adı"><br>

     	<input type="password" class="form-control" name="password" placeholder="Şifre"><br>

     	<button type="submit" class="btn btn-primary">Giriş Yap</button>
          <a href="signup.php" class="ca">Hesap Oluştur</a>
     </form>
</body>
</html>