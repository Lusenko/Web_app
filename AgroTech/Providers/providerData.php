<?php
	include_once "config.php";
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$prname = mysqli_real_escape_string($conn, $_POST['prname']);
	$amout = mysqli_real_escape_string($conn, $_POST['amout']);

	if(!empty($fname) && !empty($lname) && !empty($prname) && !empty($amout)){
		$idinte = rand(time(), 1000000000);
		$sql = mysqli_query($conn, "INSERT INTO provider (Name,LastName,Identificed) VALUES ('{$fname}','{$lname}','{$idinte}')");
		$sql2 = mysqli_query($conn, "SELECT ID FROM provider WHERE Identificed = '{$idinte}'");
		$prov_id = mysqli_fetch_assoc($sql2);
		$provider_id = $prov_id["ID"];
		$sql3 = mysqli_query($conn, "INSERT INTO spares (Name,Amout,provider_id) VALUES ('{$prname}','{$amout}',$provider_id)");
		$sql4 = mysqli_query($conn, "UPDATE `storage` SET `Amout` = `Amout` + ".$amout." WHERE `Name`='".$fname."'");
		if(!empty($sql)){
			echo "Data Send";
		}
	}else{
		echo "Enter data!";
	}
?>
