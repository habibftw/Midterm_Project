<?php
	session_start();
	session_unset($_SESSION['uname']);
	setcookie("uname", $user[4], time()-3, "/");
	header('location: Login.php');
?>