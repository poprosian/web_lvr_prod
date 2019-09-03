<?php
	include_once 'conn_inc.php';
	include_once 'cos_inc.php';
	$sql = " SELECT * FROM produse;";
	$result = mysqli_query($conn,$sql);
	$response = [];
	$resultCheck = mysqli_num_rows($result);
	if(!empty($_SESSION['shopping_cart']))
	{

		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				foreach($_SESSION['shopping_cart'] as $key => $product)
				{
					if($row['id_produs'] == $product['id'])
					{
						$row['cant'] = $product['cant'];
						$response[] = $row;
					}
				}
			}
			echo json_encode($response);

		}

	}


?>