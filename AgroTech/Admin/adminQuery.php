<?php
	include_once "config.php";
	$login = mysqli_real_escape_string($conn, $_POST['login']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql = mysqli_query($conn, "SELECT `login` FROM `logpass`");
	$sql2 = mysqli_query($conn,"SELECT `pass` FROM `logpass`");
	if($sql && $sql2){
		$sqlcheck = mysqli_fetch_assoc($sql);
		$sql2check = mysqli_fetch_assoc($sql2);
		if($login == $sqlcheck['login'] && $password == $sql2check['pass']){
			echo "success";
		}else{
			echo "Invalid login or password";
		}
	}
?>