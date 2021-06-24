<?php
    $conn = new mysqli("localhost", "root", "root", "kursach");
    if($conn->connect_error){
    die("Error: " . $conn->connect_error);
    }
    $array = $_POST['arrayL'];
    $values = $_POST['values'];
    $name = $_POST['cName'];
    $adress = $_POST['cadress'];
    $phone = $_POST['cphone'];
    $str = "";
    $sql = mysqli_query($conn,"SELECT * FROM `order`");
    $sql_name = mysqli_fetch_assoc($sql); 

    if(!$sql_name["id_goods"] == ""){
        $sql = mysqli_query($conn,"SELECT `Check_id` FROM `order` ORDER BY `Check_id` DESC LIMIT 1;");
        $checkId = mysqli_fetch_assoc($sql);
        $checkedId = intval($checkId["Check_id"]);
        $checkedId += 1;
    }
    for ($i=0; $i < count($array); $i++) { 
        $str = "INSERT INTO `order`(`id_goods`, `Name`, `Phone Number`, `Addres`, `Amount`, `Check_id`) VALUES (".$array[$i].",'".$name."','".$phone."','".$adress."',".$values[$i].",".$checkedId.");";
        mysqli_query($conn,$str);
    }
    mysqli_query($conn,"TRUNCATE TABLE carts");
?>