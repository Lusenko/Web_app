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
		<link rel="stylesheet" href="/Admin/admin.css">
    <link rel="icon" href="/icons/BMW_logo_(gray).svg.png">
	<title>Providers</title>
</head>
<body class="prov">
	
	<button id="back" type="button" onclick="location.href='/Admin/admin/admin/admin/admin.php'" class="btn btn-lg btn-primary btn-block">Go Back</button>
	<h1>Providers</h1>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
      <th scope="col">Identificed</th>
    </tr>
  </thead>
  <tbody>
			<?php
			include_once "config.php";
			$sql = mysqli_query($conn, "SELECT * FROM provider");
			$result = mysqli_fetch_all($sql,MYSQLI_ASSOC);
			foreach ($result as $key) {
				?>
				<tr>
            <td><?php echo $key['ID']?></td>
            <td><?php echo $key['Name']?></td>
						<td><?php echo $key['LastName']?></td>
						<td><?php echo $key['Identificed']?></td>
        </tr>
				<?php
			}
			?>
			</tbody>
      </table>
</body>
</html>