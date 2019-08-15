<?php

	session_start();
	$product_ids = array();
	//session_destroy();

	if(isset($_POST['id_produs']) && isset($_POST['cantitate']))
	{
		if(isset($_SESSION['shopping_cart']))
		{
			$count = count($_SESSION['shopping_cart']);

			$product_ids = array_column($_SESSION['shopping_cart'], 'id');

			if(!in_array(filter_input(INPUT_POST, 'id_produs'), $product_ids))
			{
				$_SESSION['shopping_cart'][$count] = array
				(
					'id' => filter_input(INPUT_POST, 'id_produs'),
					'cant' => filter_input(INPUT_POST, 'cantitate')
				);
			}
			else
			{
				for($i = 0; $i < count($product_ids) ; $i++)
				{
					if($product_ids[$i] == filter_input(INPUT_POST, 'id_produs'))
					{
						$_SESSION['shopping_cart'][$i]['cant'] += filter_input(INPUT_POST, 'cantitate');
					}
				}
			}

		}
		else
		{
			$_SESSION['shopping_cart'][0] = array
			(
				'id' => filter_input(INPUT_POST, 'id_produs'),
				'cant' => filter_input(INPUT_POST, 'cantitate')
			);
		}
	}

	if(filter_input(INPUT_GET, 'action') == 'delete')
	{
		foreach($_SESSION['shopping_cart'] as $key => $product)
		{
			if($product['id'] == filter_input(INPUT_GET, 'id'))
			{
				unset($_SESSION['shopping_cart'][$key]);
			}
		}

		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}



?>