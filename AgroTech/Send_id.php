<?php
    $conn = new mysqli("localhost", "root", "root", "kursach");
    if($conn->connect_error){
    die("Error: " . $conn->connect_error);
    }
    $id = $_POST['id_tov'];

    $sql = mysqli_query($conn, "INSERT INTO tractor (id) VALUES ('{$id}')");
    if(!empty($sql)){
        echo "Product add to cart";
    }
?>