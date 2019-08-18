<?php
	include_once '../includes/conn_inc.php';
	include 'admin_includes/admin_reset_inc.php';
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("Location: index");
	}	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Panou de administrare</title>
</head>
<body>
	
	<?php include 'admin_includes/admin_nav_inc_v.php' ?>

	<br>
	<h1 class="text-center">Resetare cont</h1>
	<hr>

	<div class="container">
			<div class="jumbotron">
				<form action="admin_reset_pg" class="form" method="POST">
					<label for="actuala">Parola curenta:</label>
					<input name="psw" class="form-control" type="password" id="actuala">
					<br>
					<button name="resetSubmit" class="btn btn-danger">Reseteaza</button>
				</form>

			</div>
		</div>	



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>