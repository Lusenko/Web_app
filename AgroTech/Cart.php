<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js%22%3E"defer></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js%22%3E"defer></script>
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
    <body>
        <header class="header">
            <h1 class="Cart">Cart</h1>
            <div class="container">
                <div class="Authorization">
                    <p class="Name"><b>Enter your (Name, Surname, Fathername)</b></p>
                    <input id="name" type="text" name="name">
                    <p class="Phone"><b>Enter your Phone number</b></p>
                    <input id="phone" type="text" name="phone">
                    <p class="Phone"><b>Enter your Addres</b></p>
                    <input id="addres" type="text" name="addres">
                    <button id="Buy" class="Buy" name="Buy" onclick="cart()">Buy</button>
                </div>
                <form class="yourOrder">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amout</th>
                        <th scope="col">Price</th>                    
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        $conn = new mysqli("localhost", "root", "root", "kursach");
                        if($conn->connect_error){
                        die("Error: " . $conn->connect_error);
                        } 
                        $sql = mysqli_query($conn,"SELECT carts.id, tractor.Name, tractor.Amount, tractor.Price FROM carts LEFT JOIN tractor ON carts.id=tractor.id");
                        $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                        foreach($result as $row){
                            ?>
                            <tr>
                            <td scope="col"><?php echo $row['Name']?></td>
                            <td scope="col"><input type="number" min="1" max="100" value="1"></td>
                            <td scope="col"><?php echo $row['Price']?></td>
                            <td><p style="display: none;"><?php echo $row['id']?></p></td>
                            </tr>
                            <?php
                        }
                        ?>
                      </tr>

                  </tbody>
                  </table>
            </form>
            </div>           
        </header>
        <script src="Cart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
    </body>
</html>