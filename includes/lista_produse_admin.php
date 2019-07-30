<?php
			$sql = " SELECT * FROM produse;";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$i=0;
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
								echo '<img class="card-img-top" src="../images/' . $row['image'] . '" alt="'. $row['image']. '">';
								echo '<div class="card-body">';
									echo '<h5 class="card-title">' . ucfirst($row['titlu']) . '</h5>';
									echo '<p class="card-text">' . $row['descriere'] . '</p>';
										echo '<a href="panel?deleteId=' .$row['id_produs'].'" class="btn btn-danger">X</a>';
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


		?>