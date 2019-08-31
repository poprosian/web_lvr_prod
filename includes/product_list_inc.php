<?php
	include_once 'conn_inc.php';
	$sql = " SELECT * FROM produse;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if(isset($_POST['submitCategorie']))
	{
		$categorie = $_POST['submitCategorie'];
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($categorie == "toate")
				{

				echo '<div class="col-xl-3 col-sm-6 col-12  pdg">
									<div class="card cCard">
										<div class="text-center">
											<img style="max-height: 170px; max-width: 170px;" src="images/product_images/'.$row['image'].'" alt=""  class="card-img-top">
										</div>
										<div>
										
											<h5 class="card-title cardTitle">'.ucfirst($row['titlu']).'</h5>
											<div class="sideHr"></div>
											<br>
											<p class="card-text cardText">'.$row['pret'].'€</p>
											<form method="POST" action="includes/cos_inc.php" class="ajax">
												<input style="display:none;" type="number" value="1" class="float-left" maxlength="2" min="1" name="cantitate">
												<input style="display:none;"  value="'.$row['id_produs'].'" name="id_produs">
												<input type="submit" onclick="notif();badge();" class="cardButton  btn-block mt-auto" value="ADAUGA IN COS">
											</form>
										</div>
									</div>
								</div>';

				}
				else if($categorie == $row['tag'])
				{

						echo '<div class="col-xl-3 col-sm-6 col-12  pdg">
									<div class="card cCard">
										<div class="text-center">
											<img style="max-height: 170px; max-width: 170px;" src="images/product_images/'.$row['image'].'" alt=""  class="card-img-top">
										</div>
										<div>
										
											<h5 class="card-title cardTitle">'.ucfirst($row['titlu']).'</h5>
											<div class="sideHr"></div>
											<br>
											<p class="card-text cardText">'.$row['pret'].'€</p>
											<form method="POST" action="includes/cos_inc.php" class="ajax">
												<input style="display:none;" type="number" value="1" class="float-left" maxlength="2" min="1" name="cantitate">
												<input style="display:none;"  value="'.$row['id_produs'].'" name="id_produs">
												<input type="submit" onclick="notif();badge();" class="cardButton  btn-block mt-auto" value="ADAUGA IN COS">
											</form>
										</div>
									</div>
								</div>';


				}
				
			}
		}
	}
	else if(!isset($_POST['submitCategorie']) && !isset($_GET['globalSearch']))
	{
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo '<div class="col-xl-3 col-sm-6 col-12  pdg">
									<div class="card cCard">
										<div class="text-center">
											<img style="max-height: 170px; max-width: 170px;" src="images/product_images/'.$row['image'].'" alt=""  class="card-img-top">
										</div>
										<div>
										
											<h5 class="card-title cardTitle">'.ucfirst($row['titlu']).'</h5>
											<div class="sideHr"></div>
											<br>
											<p class="card-text cardText">'.$row['pret'].'€</p>
											<form method="POST" action="includes/cos_inc.php" class="ajax">
												<input style="display:none;" type="number" value="1" class="float-left" maxlength="2" min="1" name="cantitate">
												<input style="display:none;"  value="'.$row['id_produs'].'" name="id_produs">
												<input type="submit" onclick="notif();badge();" class="cardButton  btn-block mt-auto" value="ADAUGA IN COS">
											</form>
										</div>
									</div>
								</div>';
			}
		}
	}

?>