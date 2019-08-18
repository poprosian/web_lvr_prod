<?php

	$pageName = basename($_SERVER['PHP_SELF']);


	if($pageName == "admin_comenzi_pg.php")
	{
		$sql = "SELECT * FROM comenzi WHERE status = 0 ;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
					
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo'
				<tr>
					<th scope="row">'.$row['id_comanda'].'</th>
					<td><a href="admin_detalii_pg?action=view&id='.$row['id_comanda'].'">CLICK</a></td>
					<td>'.$row['nume'].' '.$row['prenume'].'</td>
					<td>'.$row['telefon'].'</td>
					<td>'.$row['adresa'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.date('d/m/Y H:i', $row['data']).'</td>
					<td>'.$row['total'].'€</td>
					<td><a href="admin_comenzi_pg?action=final&id='.$row['id_comanda'].'" class="btn btn-success btn-sm">FINALIZEAZA</a> <a href="admin_comenzi_pg?action=delete&id='.$row['id_comanda'].'" data-toggle="tooltip" data-placement="top" title="Sterge" class="btn btn-danger btn-sm">X</a></td>
				</tr>';
				
			}
		}



		if(filter_input(INPUT_GET, 'action') == 'delete')
		{
			$id = filter_input(INPUT_GET, 'id');
			$sql = "DELETE FROM comenzi WHERE id_comanda = ".$id.";";
			mysqli_query($conn,$sql);
			$sql = "DELETE FROM comenzi_aux WHERE id_comanda = ".$id.";";
			mysqli_query($conn,$sql);
			header("Location: admin_comenzi_pg");
			exit();
		}

		if(filter_input(INPUT_GET, 'action') == 'final')
		{
			$id = filter_input(INPUT_GET, 'id');
			$sql = "UPDATE comenzi SET status = 1 WHERE id_comanda = ".$id.";";
			mysqli_query($conn,$sql);
			header("Location: admin_comenzi_pg");
			exit();
		}
	}
	else if($pageName == "admin_arhiva_comenzi_pg.php")
	{
		$sql = "SELECT * FROM comenzi WHERE status = 1;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
					
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				echo'
				<tr>
					<th scope="row">'.$row['id_comanda'].'</th>
					<td><a href="admin_detalii_pg?action=view&id='.$row['id_comanda'].'">CLICK</a></td>
					<td>'.$row['nume'].' '.$row['prenume'].'</td>
					<td>'.$row['telefon'].'</td>
					<td>'.$row['adresa'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['total'].'€</td>
					<td>'.date('d/m/Y H:i', $row['data']).'</td>
				</tr>';	
			}
		}
	}
	

?>