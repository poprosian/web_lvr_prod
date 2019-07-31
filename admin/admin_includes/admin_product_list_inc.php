<?php
	$sql = " SELECT * FROM produse;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	$i=0;
	if($resultCheck > 0)
	{
		
		while($row = mysqli_fetch_assoc($result))
		{

			if(!isset($_POST['submit']))
			{
				if($i==0)
				{
					echo '<div class="row">';
				}
				
					echo '<div class="col-md-3">';
						echo '<div class="card"> ';
							echo '<img class="card-img-top" src="../images/product_images/' . $row['image'] . '" alt="'. $row['image']. '">';
							echo '<div class="card-body">';
								echo '<h5 class="card-title">' . ucfirst($row['titlu']) . '</h5>';
								echo '<p class="card-text">' . $row['descriere'] . '</p>';
								echo '<form action="admin_panel_pg" method="POST">';
									echo '<button class="btn btn-danger" name="x-'.$row['id_produs'].'" >X</button>';
									echo '<a href="admin_edit_pg?editId='.$row['id_produs'].'  " class="btn btn-primary float-right">Editeaza</a>';
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
			else
			{
				$categorie = $_POST['SelectCategorie'];
				if($categorie == $row['tag'])
				{
					if($i==0)
					{
						echo '<div class="row">';
					}
					
						echo '<div class="col-md-3">';
							echo '<div class="card"> ';
								echo '<img class="card-img-top" src="../images/product_images/' . $row['image'] . '" alt="'. $row['image']. '">';
								echo '<div class="card-body">';
									echo '<h5 class="card-title">' . ucfirst($row['titlu']) . '</h5>';
									echo '<p class="card-text">' . $row['descriere'] . '</p>';;
									echo '<form action="admin_panel_pg" method="POST">';
										echo '<button class="btn btn-danger" name="x-'.$row['id_produs'].'" >X</button>';
										echo '<a href="admin_edit_pg?editId='.$row['id_produs'].'" class="btn btn-primary float-right">Editeaza</a>';
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
				else if($categorie == 'toate')
				{
					header("Location: admin_panel_pg");
				}
			}
			
		}
		if($i!=0)
		{
			echo '</div>';
			echo '<br>';
		}
	}
			


?>