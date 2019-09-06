<?php
	include_once 'conn_inc.php';
	$sql = " SELECT * FROM produse ORDER BY titlu ASC;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if(isset($_GET['submitCategorie']))
	{
		$categorie = $_GET['submitCategorie'];
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if($categorie == "toate")
				{
					$response[] = $row;
				}
				else if($categorie == $row['tag'])
				{
					$response[] = $row;
				}
				else if($categorie == "n-toate")
				{
					if(substr($row['tag'],0,2) == "n-")
						$response[] = $row;
				}
				
			}
			echo json_encode($response);
		}

	}


?>