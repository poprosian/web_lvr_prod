<?php
			$sql = " SELECT * FROM produse;";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$i=0;

			if(isset($_POST['submit']))
			{
				$categorie = $_POST['SelectCategorie'];
				if($resultCheck > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						if($categorie == $row['tag'])
						{
							if($i==0)
							{
								echo '<div class="row">';
							}
							
								echo '<div class="col-md-3">';
									echo '<div class="card"> ';
										echo '<img class="card-img-top" src="images/' . $row['image'] . '" alt="Card image cap">';
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
			}


		?>