<?php
	$conn = mysqli_connect("localhost","root","root","mydb");
	if (!$conn){
		echo "Database connected" . mysqli_connect_error();
	}
?>