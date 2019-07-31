<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<title>Acasa</title>
	</head>

	<body>
	
	<?php include 'includes/nav_inc_v.php' ?>	
	
	
	
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

	<h1 class="text-center">Acasa</h1>

	<script type="text/javascript" src="javascript/search.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>