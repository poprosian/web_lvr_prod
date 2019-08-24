<?php
	include_once '../includes/conn_inc.php';
	include 'admin_includes/admin_add_inc.php';
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

	<br>
	<h1 class="text-center">Adauga produs</h1>
	<hr>


	<div class="jumbotron">
		<form action="admin_add_pg" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" class="form-control" id="idNume" placeholder="Nume produs" name="numeProdus">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="3" placeholder="Descriere produs" name="descProdus"></textarea>
			</div>

			<div class="form-group">
				<select class="form-control" name="selectProdus">
				    <option value="NULL">Categorie...</option>
				    <option value="baza">Alimente de baza</option>
				    <option value="dulceata">Dulceata, gem</option>
				    <option value="compot">Compot, miere</option>
				    <option value="condimente">Condimente</option>
				    <option value="conserve">Conserve si muraturi</option>
				    <option value="ingrediente">Ingrediente</option>
				    <option value="cafea">Cafea, ceaiuri</option>
				    <option value="nidas">Prajituri Nidas</option>
				    <option value="dulciuri">Dulciuri si snacks</option>
				    <option value="alcool">Alcool</option>
				    <option value="sucuri">Sucuri si ape</option>
				    <option value="fructe">Fructe si legume</option>
				    <option value="ruski">Produse Rusesti</option>
				    <option value="peste">Produse din peste</option>
					<option value="congelate">Congelate</option>
					<option value="lactate">Lactate</option>
					<option value="mezeluri">Mezeluri</option>
			    </select>
			</div>

			<div class="form-group">
				<input type="file" name="imgProdus">
			</div>
			
			<div class="form-group">
				<input type="number" step="0.01" class="form-control" id="idPret" placeholder="Pret produs" name="pretProdus">
			</div>


			<div class="form-group">
				<button class="btn btn-success" name="adauga-submit">Adauga produs</button>
			</div>
		</form>

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>