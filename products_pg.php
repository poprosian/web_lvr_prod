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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
	<title>Produse</title>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	

</head>
<body>
	<div v-cloak id="listaProduse">
		<?php include 'includes/nav_inc_v.php'; ?>
		<main>
			<div id="mobileMenu" class="text-center">
					<br>
					<button v-on:click="toggleMobileMain()" v-bind:class="{searchBtnSelected: mobileMenu == 1}" id="mobileBtnMain" class="searchBtn">Magazin Romanesc</button>
					<button v-on:click="toggleMobileNidas()" v-bind:class="{searchBtnSelected: mobileMenu == 2}" id="mobileBtnNidas" class="searchBtn">Produse Cofetarie</button>

					<div v-show="mobileMenu == 1" id="mobileMenuMainId" class="sideMenuMain">
						<button v-on:click.prevent="requestProduse('toate')">Toate</button>
						<button v-on:click.prevent="requestProduse('baza')">Alimente de baza</button>
						<button v-on:click.prevent="requestProduse('dulceata')">Dulceata si gem</button>
						<button v-on:click.prevent="requestProduse('compot')">Compot si miere</button>
						<button v-on:click.prevent="requestProduse('condimente')">Condimente</button>
						<button v-on:click.prevent="requestProduse('conserve')">Conserve si muraturi</button>
						<button v-on:click.prevent="requestProduse('ingrediente')">Ingrediente</button>
						<button v-on:click.prevent="requestProduse('cafea')">Cafea si ceai</button>
						<button v-on:click.prevent="requestProduse('dulciuri')">Dulciuri si snacks</button>
						<button v-on:click.prevent="requestProduse('bauturi')">Bauturi</button>
						<button v-on:click.prevent="requestProduse('sucuri')">Suc si apa</button>
						<button v-on:click.prevent="requestProduse('fructe')">Fructe si legume</button>
						<button v-on:click.prevent="requestProduse('ruski')">Produse Rusesti</button>
						<button v-on:click.prevent="requestProduse('peste')">Produse din peste</button>
						<button v-on:click.prevent="requestProduse('congelate')">Congelate</button>
						<button v-on:click.prevent="requestProduse('lactate')">Lactate</button>
						<button v-on:click.prevent="requestProduse('mezeluri')">Mezeluri</button>
					</div>
					<div v-show="mobileMenu == 2" id="mobileMenuNidasId" class="sideMenuNidas">
						<button v-on:click.prevent="requestProduse('n-toate')">Toate</button>
						<button v-on:click.prevent="requestProduse('n-prajituri')">Prajituri</button>
						<button v-on:click.prevent="requestProduse('n-fursecuri')">Fursecuri si saratele</button>
						<button v-on:click.prevent="requestProduse('n-torturi')">Torturi</button>
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
								<button v-on:click="sideMenu=true" v-bind:class="{ searchBtnSelected: sideMenu }" id="searchBtnMain" class="searchBtn">Magazin Romanesc</button>
								<button v-on:click="sideMenu=false" v-bind:class="{ searchBtnSelected: !sideMenu }" id="searchBtnNidas" class="searchBtn">Produse Cofetarie</button>
							</div>
							<div v-show="sideMenu" id="sideMenuMainId" class="sideMenuMain">
								<button v-on:click.prevent="requestProduse('toate')">Toate</button>
								<button v-on:click.prevent="requestProduse('baza')">Alimente de baza</button>
								<button v-on:click.prevent="requestProduse('dulceata')">Dulceata si gem</button>
								<button v-on:click.prevent="requestProduse('compot')">Compot si miere</button>
								<button v-on:click.prevent="requestProduse('condimente')">Condimente</button>
								<button v-on:click.prevent="requestProduse('conserve')">Conserve si muraturi</button>
								<button v-on:click.prevent="requestProduse('ingrediente')">Ingrediente</button>
								<button v-on:click.prevent="requestProduse('cafea')">Cafea si ceai</button>
								<button v-on:click.prevent="requestProduse('dulciuri')">Dulciuri si snacks</button>
								<button v-on:click.prevent="requestProduse('bauturi')">Bauturi</button>
								<button v-on:click.prevent="requestProduse('sucuri')">Suc si apa</button>
								<button v-on:click.prevent="requestProduse('fructe')">Fructe si legume</button>
								<button v-on:click.prevent="requestProduse('ruski')">Produse Rusesti</button>
								<button v-on:click.prevent="requestProduse('peste')">Produse din peste</button>
								<button v-on:click.prevent="requestProduse('congelate')">Congelate</button>
								<button v-on:click.prevent="requestProduse('lactate')">Lactate</button>
								<button v-on:click.prevent="requestProduse('mezeluri')">Mezeluri</button>
							</div>
							<div v-show="!sideMenu" id="sideMenuNidasId" class="sideMenuNidas">
								<button v-on:click.prevent="requestProduse('n-toate')">Toate</button>
								<button v-on:click.prevent="requestProduse('n-prajituri')">Prajituri</button>
								<button v-on:click.prevent="requestProduse('n-fursecuri')">Fursecuri si saratele</button>
								<button v-on:click.prevent="requestProduse('n-torturi')">Torturi</button>
							</div>
						</div>
					</div>

					<div class="col-md-9">
						<div>
							<div class="container-fluid">
								<div class="row">
									
									<lista-produse v-bind:numarcos="badgeCount" v-for="produs in produse"  v-bind:produs="produs"></lista-produse>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<?php include 'includes/footer_inc_v.php'; ?>

	
	<div id="snackbar">Produsul a fost adăugat în coș!</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


	<script src="javascript/products_API.js"></script>
	<script type="text/javascript" src="javascript/search.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		function badge(count)
		{
			var badge = document.getElementById("badgeSpan");
			
			if(count>=0)
			{
				badge.innerHTML = count;
				count = count+1;
			}
						
		}
	</script>
	<script>
		function notif() {
		  var x = document.getElementById("snackbar");
		  x.className = "show";
		  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1500);
		}
	</script>
	

	



</body>
</html>