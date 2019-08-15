<?php
 include_once 'includes/conn_inc.php';
 include_once 'includes/cos_inc.php';
 include_once 'includes/comanda_inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Shopping Cart</title>
</head>
<body>
	<?php include 'includes/nav_inc_v.php' ?>	
	

	<br>
	<div class="container">
		<div class="jumbotron">
			<?php
				if(!empty($_SESSION['shopping_cart']))
				{
					echo '<h1 class="text-center">Cos de cumparaturi</h1>';
				}
				else
				{
					echo '<h1 class="text-center">Cosul este gol!</h1>';
				}

			?>
			
			
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nume produs</th>
							<th scope="col">Cantitate</th>
							<th scope="col">Pret/buc</th>
							<th scope="col">Pret Total</th>
							<th scope="col">Actiune</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = " SELECT * FROM produse;";
							$result = mysqli_query($conn,$sql);
							$resultCheck = mysqli_num_rows($result);
							$i=0;
							if(!empty($_SESSION['shopping_cart']))
							{


								if($resultCheck > 0)
								{

									$i=1;
									$total = 0;
									while($row = mysqli_fetch_assoc($result))
									{

										foreach($_SESSION['shopping_cart'] as $key => $product)
										{

											if($product['id'] == $row['id_produs'])
											{
												echo '
													<tr>
														<th scope="row">'.$i.'</th>
														<td>'.$row['titlu'].'</td>
														<td>'.$product['cant'].' buc</td>
														<td>'.$row['pret'].'€</td>
														<td>'.$row['pret']*$product['cant'].'€</td>
														<td><a class="btn btn-danger" href="cos_pg?action=delete&id='.$row['id_produs'].'">Sterge</a></td>
													</tr>
												';
												$i++;
												$total = $total + ($product['cant'] * $row['pret']);
											}

										}
									}
									
								}

								echo '

									<tr>
										<td><br></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td  colspan="5" align="right"><h3>Total: </h3></td>
										<td><h3>'.$total.'€</h3></td>
										
									</tr>
								';
							}


						?>

						
					</tbody>
				</table>
			</div>
			
			<?php
				if(!empty($_SESSION['shopping_cart']))
				{
					echo '
						<h1>Detalii:</h1>
						<hr>
						<form action="cos_pg" method="POST">
							<div class="form-row">
								<div class="col form-group">
									<label for="detaliiNume">Nume:</label>
									<input type="text" class="form-control" placeholder="Nume" id="detaliiNume" name="detaliiNume">
								</div>
								<div class="col form-group">
									<label for="detaliiPrenume">Prenume:</label>
									<input type="text" class="form-control" placeholder="Prenume" id="detaliiPrenume" name="detaliiPrenume">
								</div>
							</div>
							<div class="form-row">
								<div class="col form-group">
									<label for="detaliiAdresa">Adresa:</label>
									<input type="text" class="form-control" placeholder="Strada, bloc, numar, scara" id="detaliiAdresa" name="detaliiAdresa">
								</div>
								<div class="col form-group">
									<label for="detaliiAdresa">E-Mail:</label>
									<input type="email" class="form-control" placeholder="E-Mail" id="detaliiEmail" name="detaliiEmail">
								</div>
							</div>
							<div class="form-group">
								<label for="detaliiTelefon">Numar de telefon:</label>
								<input type="tel" class="form-control" placeholder="Numar telefon" id="detaliiTelefon" name="detaliiTelefon">
							</div>
							<div class="form-group">
								<label for="detaliiSuo">Informatii suplimentare:</label>
								<textarea class="form-control" placeholder="Informatii suplimentare" id="detaliiSup" name="detaliiSup"></textarea>
							</div>
							<div class="form-group">';

								echo '<input type="submit" class="btn btn-success" value="Trimite comanda!" name="submitComanda">
							</div>
						</form>';
				}
			?>
		</div>
	</div>

	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>