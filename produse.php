<?php
	include_once 'includes/conn.php';
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Produse</title>
</head>
<body>

	<?php include 'nav.php' ?>	
	<h1 class="text-center">Lista produse</h1>
	<hr>
	<div class="jumbotron">
		<form action="produse.php" class="form-inline" method="POST">
			<label for="selectTip" class="my-1 mr-2">Alegeti tipul de aliment: </label>
			<select class="custom-select my-1 mr-sm-2" id="selectTip" name="SelectCategorie">
				<option value="NULL">Alege...</option>
				<option value="fructe">Fructe</option>
				<option value="legume">Legume</option>
				<option value="carne">Carne</option>
				<option value="mezeluri">Mezeluri</option>
				<option value="paine">Paine</option>
				<option value="dulciuri">Dulciuri</option>
			</select>
      		<button type="submit" class="btn btn-primary my-1" name="submit">Cauta</button>
		
		</form>
	</div>


	<hr>
	


	<div class="container">
		<?php include 'includes/lista_produse.php';?>
		<?php include 'includes/search_global.php';?>
	</div>


	
	


	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>