<?php
 include_once 'includes/conn_inc.php';
 include_once 'includes/cos_inc.php';
 include_once 'includes/comanda_inc.php';
?>

<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/cos.css">
	<title>Coș de cumpărături</title>
</head>
<body>
	<?php include 'includes/nav_inc_v.php' ?>	
	<br>	
	<br>
	<br>
	<div v-cloak id="app-id" class="container">
		<div>
			<div id="Title">
				<h1 v-if="total>5" class="text-center">Coș de cumpărături</h1>
				<h1 v-else class="text-center">Coșul este gol!</h1>
			</div>
			
			
			<div v-if="total>5" class="table-responsive tabelDesktop">
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nume produs</th>
							<th scope="col">Cantitate</th>
							<th scope="col">Preț/buc</th>
							<th scope="col">Preț Total</th>
							<th scope="col">Acțiune</th>
						</tr>
					</thead>
					<tbody>
						<tr is="tabel-desktop" v-on:request-cos="requestCos();updateTotal()" v-for="produs in cos" v-bind:produs="produs"></tr>
						<tr>
							<td><br></td>
							<td>Comision</td>
							<td></td>
							<td></td>
							<td>€5.00</td>
							<td></td>
						</tr>
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
							<td><h3>{{total | 2dec}}</h3></td>
						</tr>
						
					</tbody>
				</table>
			</div>

			<div v-if="total>5" class="tabelMobil">
				<tabel-mobil  v-on:request-cos="requestCos();updateTotal()" v-for="produs in cos" v-bind:produs="produs" v-bind:showX="showX"></tabel-mobil>
				<br>
				<div style="position: relative;">
					<div class="cardMobilCos">
						<h2>Comision</h2>
						<div class="cardQty">
							<p class="qtyP">1</p>
						</div>
						<p class="bucati">buc.</p>
						<p id="comision">€5.00</p>
					</div>
				</div>
				<br>
				<h3 style="text-align: right;">Total: €{{total | 2dec}}</h3>
			</div>
			<div v-if="total>5" id="Checkout">
				<div v-if="total>30" id="Detalii">
					<h1>Detalii:</h1>
					<hr>
					<p class="text-muted">Campurile marcate cu * sunt obligatorii!</p>
					<form action="cos_pg" method="POST">
						<div class="form-row">
							<div class="col form-group">
								<label for="detaliiNume">Nume: *</label>
								<input type="text" class="form-control" placeholder="Nume" id="detaliiNume" name="detaliiNume">
							</div>
							<div class="col form-group">
								<label for="detaliiPrenume">Prenume: *</label>
								<input type="text" class="form-control" placeholder="Prenume" id="detaliiPrenume" name="detaliiPrenume">
							</div>
						</div>
						<div class="form-row">
							<div class="col form-group">
								<label for="detaliiAdresa">Adresă: *</label>
								<input type="text" class="form-control" placeholder="Strada, bloc, număr, scară" id="detaliiAdresa" name="detaliiAdresa">
							</div>
							<div class="col form-group">
								<label for="detaliiAdresa">E-Mail: </label>
								<input type="email" class="form-control" placeholder="E-Mail" id="detaliiEmail" name="detaliiEmail">
							</div>
						</div>
						<div class="form-group">
							<label for="detaliiTelefon">Număr de telefon: *</label>
							<input type="tel" class="form-control" placeholder="Numar telefon" id="detaliiTelefon" name="detaliiTelefon">
						</div>
						<div class="form-group">
							<label for="detaliiSuo">Informații suplimentare:</label>
							<textarea class="form-control" placeholder="Informații suplimentare" id="detaliiSup" name="detaliiSup"></textarea>
						</div>
						<div class="form-group">
							<input v-bind:value="total" type="number" style="display: none;" name="totalComanda">
							<input type="submit" class="btn btn-success" value="Trimite comanda!" name="submitComanda">
						</div>
					</form>
				</div>
				<div v-else id="DetaliiError">
					<div class="alert alert-danger" role="alert">
					 	Comanda trebuie sa fie de minim 25€ (Fara comisionul de 5€)
					</div>
				</div>
			</div>
			

		</div>
	</div>

	<div class="content"></div>
	<?php include "includes/footer_inc_v.php"; ?>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

	<script src="javascript/cos_API.js"></script>
	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>