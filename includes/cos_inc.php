<?php

	session_start();
	$product_ids = array();
	if(isset($_GET['id_produs']) && isset($_GET['cantitate']))
	{
		
		if(isset($_SESSION['shopping_cart']))
		{
			
			
			$count = count($_SESSION['shopping_cart']);
			$product_ids = array_column($_SESSION['shopping_cart'], 'id');
			if(!in_array(filter_input(INPUT_GET, 'id_produs'), $product_ids))
			{
				$_SESSION['shopping_cart'][$count] = array
				(
					'id' => filter_input(INPUT_GET, 'id_produs'),
					'cant' => filter_input(INPUT_GET, 'cantitate')
				);

			}
			else
			{
				for($i = 0; $i < count($product_ids) ; $i++)
				{
					if($product_ids[$i] == filter_input(INPUT_GET, 'id_produs'))
					{
						$_SESSION['shopping_cart'][$i]['cant'] += filter_input(INPUT_GET, 'cantitate');
					}
				}

			}

		}
		else
		{
			$_SESSION['shopping_cart'][0] = array
			(
				'id' => filter_input(INPUT_GET, 'id_produs'),
				'cant' => filter_input(INPUT_GET, 'cantitate')
			);
		}
		$nr=0;
			foreach ($_SESSION['shopping_cart'] as $key => $value) {
				$nr = $nr  + $_SESSION['shopping_cart'][$key]['cant'];
			}
		echo $nr;
		

	}

	if(filter_input(INPUT_GET, 'action') == 'delete')
	{
		foreach($_SESSION['shopping_cart'] as $key => $product)
		{
			if($product['id'] == filter_input(INPUT_GET, 'id'))
			{
				/*if($product['cant']>1)
				{
					$_SESSION['shopping_cart'][$key]['cant']=$_SESSION['shopping_cart'][$key]['cant']-1;
				}
				else if($product['cant']==1)
				{*/
					unset($_SESSION['shopping_cart'][$key]);
				//}
				
			}
		}

		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}

	if(filter_input(INPUT_GET, 'action') == 'minus')
	{
		foreach($_SESSION['shopping_cart'] as $key => $product)
		{
			if($product['id'] == filter_input(INPUT_GET, 'id'))
			{
				if($product['cant']>1)
				{
					$_SESSION['shopping_cart'][$key]['cant']=$_SESSION['shopping_cart'][$key]['cant']-1;
				}
				else if($product['cant']==1)
				{
					unset($_SESSION['shopping_cart'][$key]);
				}
				
			}
		}

		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}

	if(filter_input(INPUT_GET, 'action') == 'plus')
	{
		foreach($_SESSION['shopping_cart'] as $key => $product)
		{
			if($product['id'] == filter_input(INPUT_GET, 'id'))
			{
				$_SESSION['shopping_cart'][$key]['cant']=$_SESSION['shopping_cart'][$key]['cant']+1;
				
			}
		}

		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}



?>