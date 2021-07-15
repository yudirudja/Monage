<?php
if(isset ($_POST['username']) && isset ($_POST['password'])) {  
    session_start();
	$_SESSION['username']=$_POST['username']; 
    $_SESSION['password']=$_POST['password']; 
	if($_SESSION['username']=='kadep_yudi'&&$_SESSION['password']=='hooh'){ 
		header("Location: index.php"); 
	}
	else if($_SESSION['username']=='menteri_yudi'&&$_SESSION['password']=='hooh'){ 
		header("Location: c_programKerja2.php"); 
	}
	else{
		echo "Username atau Password Salah, Silahkan <a href= login.php>Login</a> Kembali Dengan Username dan Password Yang Benar.";
	}
  }
?>
