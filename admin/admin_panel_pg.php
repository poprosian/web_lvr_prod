<?php
	include_once '../includes/conn_inc.php';
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
	<link rel="stylesheet" href="../css/main.css">
	<title>Panou de administrare</title>
</head>
<body>

	<?php include 'admin_includes/admin_nav_inc_v.php' ?>	
	
	<main>
		<br>

		<div class="row">
	    	<div class="col-sm-12 text-center">
	        	<h1 class="text-center">Lista produse</h1>
	        	<a href="admin_add_pg" class="btn btn-primary btn-md">+</a>
	     	</div>
		</div>

		<hr>
		<br> 
		<div class="jumbotron">
			<p>Alegeți tipul de aliment: </p>
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Alege categoria...
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  	<form action="admin_panel_pg " method="POST">
				    <button class="dropdown-item" name="submitCategorie" value="toate">Toate</button>
				    <button class="dropdown-item" name="submitCategorie" value="fructe">Fructe</button>
				    <button class="dropdown-item" name="submitCategorie" value="legume">Legume</button>
				    <button class="dropdown-item" name="submitCategorie" value="carne">Carne</button>
				    <button class="dropdown-item" name="submitCategorie" value="mezeluri">Mezeluri</button>
				    <button class="dropdown-item" name="submitCategorie" value="paine">Paine</button>
				    <button class="dropdown-item" name="submitCategorie" value="dulciuri">Dulciuri</button>
				</form>
				</div>
			</div>
		</div>
		
			
		
		<hr>
		<div class="container">

			<?php include 'admin_includes/admin_product_list_inc.php';
			include 'admin_includes/admin_delete_inc.php';

			?>
		</div>
	</main>
	



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>