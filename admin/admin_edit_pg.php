<?php
	include_once '../includes/conn_inc.php';
	include 'admin_includes/admin_edit_inc.php';
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
	<h1 class="text-center">Editeaza produs</h1>
	<hr>

	<div class="jumbotron">
		<form action="admin_edit_pg" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="idProdus">ID Produs:</label>
				<input readonly type="text" class="form-control" id="idProdus" name="idProdus" <?php echo 'value="'.$editRow['id_produs'].'"';?>>
			</div>

			<div class="form-group">
				<label for="idNume">Nume Produs:</label>
				<input type="text" class="form-control" id="idNume" placeholder="Nume produs" name="numeProdus" <?php echo 'value="'.$editRow['titlu'].'"';?>>
			</div>
			<div class="form-group">
				<label for="idDesc">Descriere Produs:</label>
				<textarea class="form-control" id="idDesc" rows="3" placeholder="Descriere produs" name="descProdus"><?php echo $editRow['descriere'];?></textarea>
			</div>

			<div class="form-group">
				<label for="idCat">Categorie:</label>
				<select class="form-control" name="selectProdus" id="idCat">
				    <option <?php if($editRow['tag'] == "NULL") echo 'selected'; ?> value="NULL">Categorie...</option>
				    <option <?php if($editRow['tag'] == "baza") echo 'selected'; ?>  value="baza">Alimente de baza</option>
				    <option <?php if($editRow['tag'] == "dulceata") echo 'selected'; ?>  value="dulceata">Dulceata, gem</option>
				    <option <?php if($editRow['tag'] == "compot") echo 'selected'; ?>  value="compot">Compot, miere</option>
				    <option <?php if($editRow['tag'] == "condimente") echo 'selected'; ?>  value="condimente">Condimente</option>
				    <option <?php if($editRow['tag'] == "conserve") echo 'selected'; ?>  value="conserve">Conserve si muraturi</option>
				    <option <?php if($editRow['tag'] == "ingrediente") echo 'selected'; ?>  value="ingrediente">Ingrediente</option>
				    <option <?php if($editRow['tag'] == "cafea") echo 'selected'; ?>  value="cafea">Cafeam ceaiuri</option>
				    <option <?php if($editRow['tag'] == "dulciuri") echo 'selected'; ?>  value="dulciuri">Dulciuri si snacks</option>
				    <option <?php if($editRow['tag'] == "alcool") echo 'selected'; ?>  value="alcool">Alcool</option>
				    <option <?php if($editRow['tag'] == "sucuri") echo 'selected'; ?>  value="sucuri">Sucuri si ape</option>
				    <option <?php if($editRow['tag'] == "fructe") echo 'selected'; ?>  value="fructe">Fructe si legume</option>
				    <option <?php if($editRow['tag'] == "ruski") echo 'selected'; ?>  value="ruski">Produse Rusesti</option>
				    <option <?php if($editRow['tag'] == "peste") echo 'selected'; ?>  value="peste">Produse din peste</option>
					<option <?php if($editRow['tag'] == "congelate") echo 'selected'; ?>  value="congelate">Congelate</option>
					<option <?php if($editRow['tag'] == "lactate") echo 'selected'; ?>  value="lactate">Lactate</option>
					<option <?php if($editRow['tag'] == "mezeluri") echo 'selected'; ?>  value="mezeluri">Mezeluri</option>
					<option <?php if($editRow['tag'] == "prajituri") echo 'selected'; ?>  value="prajituri">Prajituri</option>
					<option <?php if($editRow['tag'] == "fursecuri") echo 'selected'; ?>  value="fursecuri">Fursecuri si saratele</option>
					<option <?php if($editRow['tag'] == "torturi") echo 'selected'; ?>  value="torturi">Torturi</option>
			    </select>
			</div>

			<div class="form-group">
				<label for="idPoza">Poza:</label>
				<input type="file" name="imgProdus" id="idPoza">
			</div>

			<div class="form-group">
				<label for="idPret">Pret:</label>
				<input type="number" step="0.01" class="form-control" id="idPret" placeholder="Pret produs" name="pretProdus" <?php echo 'value="'.$editRow['pret'].'"';?>>
			</div>

			<div class="form-group">
				<button class="btn btn-success" name="adauga-submit">Editeaza produs</button>
			</div>
		</form>

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>