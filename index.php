<!DOCTYPE html>
<html lang="ro">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
		<link rel="stylesheet" href="css/main.css">

		<title>Acasă</title>
	</head>

	<body>
	
	<?php include 'includes/nav_inc_v.php'; ?>

	<main>
		<div class="container">
			<div class="row justify-content-center">
					<h1>Bine ati venit</h1>
			</div>
		</div>
			<br>
		<div class="container">
			<div class="row justify-content-center">
					<p>Din dorinţa de a pune pe mesele dumneavoastră produse româneşti, a luat naştere ideea mea de a le cumpăra şi a le livra la domiciliu. Deoarece chiar dacă de multe ori ne dorim să ajungem la un magazin cu produse româneşti, ne stă în cale lipsa timpului, aglomeraţia, lipsa locurilor de parcare, faptul că cel mai apropiat magazin se află la o distanţa destul de mare, aşa că vreau să duc alimentele pe care le doriţi direct la uşa dumneavoastră.</p>

				<p> Produsele vor fi achiziţionate din magazinul românesc aflat în zona noastră deoarece am descoperit în cadrul acestora exact ceea ce căutam produse de calitate, alese cu grijă pentru toate gusturile. Tot ce trebuie să faceți este să plasați o comandă pe site, stabilim împreună intervalul orar de livrare, iar de restul mă ocup eu.</p>
				<p> 
Livrăm in regiunea Ile de France, preluăm comenzi zilnic în intervalul orar 10:00-22.00, comanda minimă este de 25 euro iar comisionul de livrare este de 5 euro/comandă. 
				</p>
			</div>
			<div class="row">
				<div id="carouselAcasa" class="carousel slide" data-ride="carousel" >
					<ol class="carousel-indicators">
						<li data-target="#carouselAcasa" data-slide-to="0" class="active"></li>
						<li data-target="#carouselAcasa" data-slide-to="1"></li>
						<li data-target="#carouselAcasa" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/1.jpg" alt="Paine">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/2.jpg" alt="Salam">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/3.jpg" alt="Sunca">
						</div>

						<a href="#carouselAcasa" class="carousel-control-prev" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only"></span>
						</a>
						<a href="#carouselAcasa" class="carousel-control-prev" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a href="#carouselAcasa" class="carousel-control-next" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				
			</div>
			

		</div>

		
	</main>
	
	<?php include 'includes/footer_inc_v.php'; ?>
	




	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script>
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#237afc"
	    },
	    "button": {
	      "background": "transparent",
	      "text": "#fff",
	      "border": "#fff"
	    }
	  },
	  "content": {
	    "message": "Acest website folosește cookie-uri pentru a-ți oferi cea mai bună experiență.",
	    "dismiss": "Am înțeles!",
	    "link": "Află mai multe."
	  }
	});
	</script>
</html>