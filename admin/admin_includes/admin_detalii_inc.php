<?php

		if(filter_input(INPUT_GET, 'action') == 'view')
		{
			$id = filter_input(INPUT_GET, 'id');
			$sql = "SELECT * FROM comenzi_aux WHERE id_comanda = ".$id.";";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$sql2 = "SELECT * FROM produse WHERE id_produs =".$row['id_produs'].";";
					$result2 = mysqli_query($conn,$sql2);
					$resultCheck2 = mysqli_num_rows($result2);
					if($resultCheck2 > 0)
					{
						while($row2 = mysqli_fetch_assoc($result2))
						{
							echo '<p>'.$row2['titlu'].' X '.$row['cantitate'].'</p>';
						}
					}
				}
			}
			
		}

	?>