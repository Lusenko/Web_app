<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Harvester</title>
</head>
<body>
<header class="header">
        <div id="container" class="container">
            <div class="header_inner">
                <div class="Agro"><b>AgroTech</b></div>
                    <nav class="nav">
                        <ul class="menu">
                            <li><a class="nav_link" href="News.html">news</a></li>
                            <li><a class="nav_link" href="About.html">About</a></li>                           
                        </ul>
                        
                    </nav>  
                    <div class="Authorization">
                        <p><a href="Cart.php"><img src="images/carts.png" width="50px" height="50px" alt=""></a></p>
                    </div>
            </div>                                         
        </div>
    </header>
    <div class="intro">
        <div class="container"></div>
    </div>
    <section class="section">
        <div class="Text">
            <h2>Harvester</h2>
        </div>
        <div class="tractor_photo">
            <img src="images/Com.jpg" alt="">
            
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amout</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $conn = new mysqli("localhost", "root", "root", "kursach");
                    if($conn->connect_error){
                    die("Error: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM harvester";
                    if($result = $conn->query($sql)){
                        $rowsCount = $result->num_rows; 
                    foreach($result as $row){
                        ?>
                        
                        <tr class="display">

                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Amount']?></td>
                    <td><?php echo $row['Price']?>$</td>
                    <td class="Buttons"><button id="<?php echo $row['id']?>" class="buttonIDS">Go to Cart</button></td>
                    </tr>
                    <?php

                    }                  
                    $result->free();
                } else{
                    echo "Error: " . $conn->error;
                }
                $conn->close();
            ?>
            </tbody>
            </table>
        </div>
    </section>
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>