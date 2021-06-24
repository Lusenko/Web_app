<?php
	include_once "config.php";
 	$id = $_POST['id_tov'];
	$sql = mysqli_query($conn, "DELETE FROM `cart` WHERE ID = '{$id}'");
?>