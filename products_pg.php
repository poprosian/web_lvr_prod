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
	<title>Produse</title>
	

</head>
<body>

	<?php include 'includes/nav_inc_v.php'; ?>	
	<h1 class="text-center">Listă produse</h1>
	<hr>
	<div class="jumbotron">
		<form action="products_pg" class="form-inline" method="POST">
			<label for="selectTip" class="my-1 mr-2">Alegeți tipul de aliment: </label>
			<select class="custom-select my-1 mr-sm-2" id="selectTip" name="SelectCategorie">
				<option value="NULL">Alege...</option>
				<option value="toate">Toate</option>
				<option value="fructe">Fructe</option>
				<option value="legume">Legume</option>
				<option value="carne">Carne</option>
				<option value="mezeluri">Mezeluri</option>
				<option value="paine">Paine</option>
				<option value="dulciuri">Dulciuri</option>
			</select>
      		<button type="submit" class="btn btn-primary my-1" name="submit">Caută</button>
		
		</form>
	</div>


	<hr>
	

	<div class="container">
		<?php include 'includes/product_list_inc.php';?>
		<?php include 'includes/global_search_inc.php';?>
		
	</div>

	
	<div id="snackbar">Produsul a fost adăugat în coș!</div>
	<?php include "includes/footer_inc_v.php"; ?>
	<script type="text/javascript" src="javascript/search.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		function badge(count)
		{
			var badge = document.getElementById("badgeSpan");
			
			if(count>=0)
			{
				badge.className = "badge badge-pill badge-danger";
				badge.innerHTML = count;
			}
						
		}
	</script>
	<script type="text/javascript">
		$('form.ajax').on('submit', function() {
			
			var that = $(this),
				url=that.attr('action');
				method = that.attr('method'),
				data = {};

				that.find('[name]').each(function(index, value) {
					var that = $(this),
					name = that.attr('name'),
					value = that.val();

					data[name] = value;
				})

				$.ajax({
					url: url,
					type: method,
					data: data,
					success: function(response){
						badge(response);
						
					}

				});


			return false;
		});
	</script>
	<script>
		function notif() {
		  var x = document.getElementById("snackbar");
		  x.className = "show";
		  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		}
	</script>
	 

</body>
</html>