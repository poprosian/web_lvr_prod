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
								echo '<h5 class="card-title">' . ucfirst($row['titlu']) . '</h5>';
								echo '<p class="card-text">' . $row['descriere'] . '</p>';
								echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
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
		}
	}
	
?>