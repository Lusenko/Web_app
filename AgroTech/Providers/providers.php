<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Providers</title>
	<link rel="stylesheet" href="/Providers/providers.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="icon" href="/icons/BMW_logo_(gray).svg.png">
		
</head>
<body>
	<div class="main">
		<div class="conteiner">
			<div class="nav">
				<img class="photo"src="/icons/BMW_logo_(gray).svg.png" width="60" height="60">
				<p class="text">For providers BMW</p>
				</div>	
				<div class="form">
					<form id="formid" class="form-in" action="#">
						<div class="group-items">
						<label class="label">Name</label>
						<input type="text" name="fname" class="form-control" id="name" required>
						</div>
						<div class="group-items">
						<label class="label" >Last name</label>
						<input type="text" name="lname" class="form-control" id="lastname" required>
						</div>
						<div class="group-items">
						<label class="label">Product name</label>
						<input type="text" name="prname" class="form-control" id="productname" required>
						</div>
						<div class="group-items">
						<label class="label">Amout</label>
						<input type="text" name="amout" class="form-control" id="amout" required>
						</div>
							<div class="buttons">
						  <button  type="button" onclick="location.href='/index.php'" class="btn btn-secondary" id="secondar">Back to store</button>
        			<button type="submit" id="submit" class="btn btn-success">  Send Request</button>
							</div>					
					</form>
			</div>
		</div>
	</div>
	<script src="/Providers/providers.js"></script>
</body>
</html>