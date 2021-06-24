<?php
	include_once "config.php";
	$array = $_POST['arrayL'];
	$values = $_POST['values'];
	$name = $_POST['cName'];
	$lastname = $_POST['clastName'];
	$email = $_POST['cemail'];
	$adress = $_POST['cadress'];
	$state = $_POST['cstate'];
	$zip = $_POST['czip'];
	$str = "";
	$sql = mysqli_query($conn,"SELECT * FROM `order`");
	$sql_name = mysqli_fetch_assoc($sql); 
	if(!$sql_name["Name"] == ""){
		$sql = mysqli_query($conn,"SELECT `checkId` FROM `order` ORDER BY `checkId` DESC LIMIT 1;");
		$checkId = mysqli_fetch_assoc($sql);
		$checkedId = intval($checkId["checkId"]);
		$checkedId += 1;
	}
	for ($i=0; $i < count($array); $i++) { 
			$str = "INSERT INTO `order`(`Name`, `LastName`, `adress`, `state`, `zip`, `GoodID`, `amout`, `checkId`) VALUES ('".$name."','".$lastname."','".$adress."','".$state."',".$zip.",".$array[$i].",".$values[$i].",".$checkedId.");";
			mysqli_query($conn,$str);				
	}
	mysqli_query($conn,"TRUNCATE TABLE cart");
?>