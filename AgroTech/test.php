<?php
	include_once "config.php";
 	$id = $_POST['id_tov'];
	$sql = mysqli_query($conn, "INSERT INTO cart (ID) VALUES ('{$id}')");
	if(!empty($sql)){
		echo "Add to cart";
	}
?>