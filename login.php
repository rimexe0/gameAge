<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
  

<form action="authenticate.php" method="post">
     	<h2>Giriş Yap</h2>
     	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="Kullanıcı Adı"><br>

     	<input type="password" name="password" placeholder="Şifre"><br>

     	<button type="submit">Giriş Yap</button>
          <a href="signup.php" class="ca">Hesap Oluştur</a>
     </form>
</body>
</html>