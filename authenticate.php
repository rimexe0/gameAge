<?php 

include ('config.php');
if($_SESSION['user_name'] == 'guest'){

	session_unset();

// destroy the session
session_destroy();
}
session_start(); 
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Kullanıcı adı gerekli");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Şifre gerekli");
	    exit();
	}else{

        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: index.php?error=Kullanıcı adı veya şifre hatalı");
		        exit();
			}
		}else{
			header("Location: index.php?error=Kullanıcı adı veya şifre hatalı");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}