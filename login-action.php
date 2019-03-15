<?php
session_start();
error_reporting(0);
require_once('./login-script.php');
$login = new Login();

 $username = $_POST['username'];

 $password = $_POST['password'];
 if ($username!='') {
 	

 $row = $login->get($username);
if ($row['password']==$password) {
	$_SESSION['row'] = $row;
	$_SESSION['username'] = $username;
	header('Location:profile.php');
}else{
	echo "enter proper username or password";
}
}
?>