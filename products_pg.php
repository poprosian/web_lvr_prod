<?php
	include_once 'includes/conn_inc.php';
	
 ?>

<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/products.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Produse</title>
	

</head>
<body>

	<?php include 'includes/nav_inc_v.php'; ?>	
	<main>
		<div id="mobileMenu" class="text-center">
				<br>
				<button id="mobileBtnMain" class="searchBtn">Magazin Romanesc</button>
				<button id="mobileBtnNidas" class="searchBtn">Produse Cofetarie</button>
				<div style="display: none;" id="mobileMenuMainId" class="sideMenuMain">
					<form action="products_pg" method="POST">
						<button name="submitCategorie" value="toate">Toate</button>
						<button name="submitCategorie" value="baza">Alimente de baza</button>
						<button name="submitCategorie" value="dulceata">Dulceata si gem</button>
						<button name="submitCategorie" value="compot">Compot si miere</button>
						<button name="submitCategorie" value="condimente">Condimente</button>
						<button name="submitCategorie" value="conserve">Conserve si muraturi</button>
						<button name="submitCategorie" value="ingrediente">Ingrediente</button>
						<button name="submitCategorie" value="cafea">Cafea si ceai</button>
						<button name="submitCategorie" value="dulciuri">Dulciuri si snacks</button>
						<button name="submitCategorie" value="alcool">Alcool</button>
						<button name="submitCategorie" value="sucuri">Suc si apa</button>
						<button name="submitCategorie" value="fructe">Fructe si legume</button>
						<button name="submitCategorie" value="ruski">Produse Rusesti</button>
						<button name="submitCategorie" value="peste">Produse din peste</button>
						<button name="submitCategorie" value="congelate">Congelate</button>
						<button name="submitCategorie" value="lactate">Lactate</button>
						<button name="submitCategorie" value="mezeluri">Mezeluri</button>
					</form>
				</div>
				<div style="display: none;" id="mobileMenuNidasId" class="sideMenuNidas">
					<form action="products_pg" method="POST">
						<button name="submitCategorie" value="toate">Toate</button>
						<button name="submitCategorie" value="prajituri">Prajituri</button>
						<button name="submitCategorie" value="fursecuri">Fursecuri si saratele</button>
						<button name="submitCategorie" value="torturi">Torturi</button>
					</form>
				</div>
				<br>
				<br>
			</div>
		<div class="container-fulid">
			<div class="row">
				<div class="col-md-3">
					<div id="sideMenu">
						<p id="sideTitle">CĂUTARE</p>
						<div class="sideHr"></div>
						<br>
						<div class="text-center">
							<button id="searchBtnMain" class="searchBtn searchBtnSelected">Magazin Romanesc</button>
							<button id="searchBtnNidas" class="searchBtn">Produse Cofetarie</button>
						</div>
						<div id="sideMenuMainId" class="sideMenuMain">
							<form action="products_pg" method="POST">
								<button name="submitCategorie" value="toate">Toate</button>
								<button name="submitCategorie" value="baza">Alimente de baza</button>
								<button name="submitCategorie" value="dulceata">Dulceata si gem</button>
								<button name="submitCategorie" value="compot">Compot si miere</button>
								<button name="submitCategorie" value="condimente">Condimente</button>
								<button name="submitCategorie" value="conserve">Conserve si muraturi</button>
								<button name="submitCategorie" value="ingrediente">Ingrediente</button>
								<button name="submitCategorie" value="cafea">Cafea si ceai</button>
								<button name="submitCategorie" value="dulciuri">Dulciuri si snacks</button>
								<button name="submitCategorie" value="alcool">Alcool</button>
								<button name="submitCategorie" value="sucuri">Suc si apa</button>
								<button name="submitCategorie" value="fructe">Fructe si legume</button>
								<button name="submitCategorie" value="ruski">Produse Rusesti</button>
								<button name="submitCategorie" value="peste">Produse din peste</button>
								<button name="submitCategorie" value="congelate">Congelate</button>
								<button name="submitCategorie" value="lactate">Lactate</button>
								<button name="submitCategorie" value="mezeluri">Mezeluri</button>
							</form>
						</div>
						<div id="sideMenuNidasId" class="sideMenuNidas">
							<form action="products_pg" method="POST">
								<button name="submitCategorie" value="toate">Toate</button>
								<button name="submitCategorie" value="prajituri">Prajituri</button>
								<button name="submitCategorie" value="fursecuri">Fursecuri si saratele</button>
								<button name="submitCategorie" value="torturi">Torturi</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-md-9">
					<div id="productList">
						<div class="container-fluid">
							<div class="row">

								<?php include 'includes/product_list_inc.php';?>
								<?php include 'includes/global_search_inc.php';?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php include 'includes/footer_inc_v.php'; ?>

	
	<div id="snackbar">Produsul a fost adăugat în coș!</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="javascript/productList.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		function badge(count)
		{
			var badge = document.getElementById("badgeSpan");
			
			if(count>=0)
			{
				badge.innerHTML = count;
			}
						
		}
	</script>
	<script src="javascript/formSend.js" type="text/javascript"></script>
	<script>
		function notif() {
		  var x = document.getElementById("snackbar");
		  x.className = "show";
		  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		}
	</script>
	

	



</body>
</html>