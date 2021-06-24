  <!DOCTYPE html>
  <html lang="en">
  <head>
	      <meta charset="UTF-8">
	      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		    <link rel="stylesheet" href="/style.css">
		    <link rel="icon" href="/icons/BMW_logo_(gray).svg.png">
	      <title>Cart</title>
  </head>
  <body>
      <div id="cart-block">
	        <div id="cartID"class="cart">
              <div class="cart-form">
                  <form id="formID" class="form" action="">
                      <div> 
                          <label for="inputEmail4" class="label2">Email</label>
                          <input type="input" class="form-control" id="inputEmail4" placeholder="Email">
                          <label for="inputAddress" class="label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          <label for="inputState" class="label">State</label>
                          <select id="inputState" class="form-control">
                              <option selected>Choose</option>
                              <option>Alabama</option>		
                              <option>Alaska</option>		
                              <option>Arizona</option>	
                              <option>Arkansas</option>	
                              <option>California</option>	
                              <option>Colorado</option>	
                              <option>Connecticut</option>	
                              <option>Delaware</option>	
                              <option>Florida</option>	
                              <option>Georgia</option>          
                          </select>
                          <label for="inputZip" class="label" >Zip</label>
                          <input type="text" class="form-control" id="inputZip" placeholder="25032">	
                          <div class="fio-n">
                              <div class="fio-text">
                                  <label class="label">Name</label>
                                  <label class="fiolabel-last" id="label-last">Last Name</label>
                              </div>
                              <div class="fio">        
                                  <input type="text" class="form-control" id="name_cart" placeholder="Name">
                                  <input type="text" class="form-control" id="lastname_cart"placeholder="LastName">
                              </div>
                          </div>    
                    </div>
                    <div id="cart-orders"class="cart-orders">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amout</th>
                                    <th scope="col">Price</th>
                                    <th scope="col"></th>
                                    <th scope="col">Total<div id="totalth"></div></th>
                                </tr>
                            </thead>
                            <tbody>
			                    <?php
			                        include_once "config.php";
			                        $sql = mysqli_query($conn, "SELECT cart.ID,storage.Name,storage.Amout,storage.Price FROM cart LEFT JOIN storage ON cart.ID=storage.ID");
                                    $sql_id = mysqli_fetch_assoc($sql);
		                            $sqld_id = $sql_id["ID"];
                                    if($sqld_id == ""){
                                ?>
                                    <script>
                                        let http = "<h1>Cart is empty</h1>"
                                        document.getElementById('cart-orders').innerHTML = http
                                    </script>
                                <?php
                                    }else{
                                        $sql = mysqli_query($conn, "SELECT cart.ID,storage.Name,storage.Amout,storage.Price FROM cart LEFT JOIN storage ON cart.ID=storage.ID");
			                            $result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
			                            foreach ($result as $key) {
				                        ?>
				                            <tr class="display">          
                                                <td><?php echo $key['Name']?></td>
                                                <td><input class="value" type="number" min="1" value="1" max="100" id="cartValue"></td>
						                        <td><span><?php echo $key['Price']?></span><a>$</a></td>
                                                <td class="Buttons">
                                                <button id="<?php echo $key['ID']?>" class="buttonIDS">Удалить</button>
                                                <p style="display: none;"><?php echo $key['ID']?></p>
                                                </td>
                                                <td></td>
                                            </tr>
				                        <?php
                                        }
			                        }
			                    ?>
			                      </tbody>
                        </table>
                    </div>
                  <div>
                      <div class="form-buttons">
                          <button type="button" onclick="location.href='/index.php'" class="btn btn-secondary" id="secondar">Back to store</button>
                          <button type="button" onclick="cart()" class="btn btn-success" id="buy">Checkout</button>
                      </div>
                  </div>	      
                </form>
              </div>   
        </div>
    </div>
    <script src="/Cart/cart.js"></script>
 </body>
 </html>
 