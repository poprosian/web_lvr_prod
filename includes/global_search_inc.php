<?php


	if(isset($_GET['globalSearch']))
	{
		$search = $_GET['globalSearch'];
		$sql = " SELECT * FROM produse WHERE LOWER(titlu) LIKE LOWER('%$search%') ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($i==0)
				{
					echo '<div class="row">';
				}
				
					echo '<div class="col-md-3">';
							echo '<div class="card"> ';
								echo '<img class="card-img-top" src="images/product_images/' . $row['image'] . '" alt="Card image cap">';
								echo '<div class="card-body">';
								echo '<h5 class="card-title text-center">' . ucfirst($row['titlu']) . '</h5>';
								echo '<p class="card-text text-center">' . $row['descriere'] . '</p>';
								echo '<hr>';
								echo '<p class="text-center"><b>Pret:</b> '.$row['pret'].'€</p>';
								echo '<hr>';
								echo '<form method="POST" action="includes/cos_inc.php" class="ajax">';
									echo '
											

											
											<input style="width: 3em;" type="number" value="1" class="float-left" maxlength="2" min="1" name="cantitate">
											<input style="display:none;"  value="'.$row['id_produs'].'" name="id_produs">
											<input type="submit" value="Adauga in cos" class="btn btn-sm btn-primary float-right cartButton" onclick="notif()">

										';
								echo '</form>';
								echo '</div>';
							echo '</div>'; 
						echo '</div>';

				
				$i++;
					if($i==4)
					{
						$i=0;

					}
					if($i==0)
					{
						echo '</div>';
						echo '<br>';
					}
			}
			if($resultCheck%4!=0)
			{
				echo '</div>';
			}
		}
	}
	
?>