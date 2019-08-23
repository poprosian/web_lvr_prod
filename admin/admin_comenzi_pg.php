<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("Location: index");
	}
	include_once '../includes/conn_inc.php';
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
	<div class="container-fluid">
		<div class="jumbotron">
			<h1 class="text-center">Lista comenzi active | <a href="admin_arhiva_comenzi_pg">Arhiva</a></h1>
			<hr>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="thead-dark">
						<th scope="col">ID Comanda</th>
						<th scope="col">Produse comandate</th>
						<th scope="col">Nume client</th>
						<th scope="col">Telefon client</th>
						<th scope="col">Adresa client</th>
						<th scope="col">E-Mail client</th>
						<th scope="col">Data</th>
						<th scope="col">Total</th>
						<th scope="col">Actiuni</th>
					</thead>
					<tbody>
						<?php include 'admin_includes/admin_comenzi_inc.php' ?>
					</tbody>
				</table>
			</div>
			

		</div>
	</div>


	
		
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>