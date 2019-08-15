<?php
	
	
	if(isset($_GET['editId']))
	{
		$sql = "SELECT * FROM produse WHERE id_produs = '".$_GET['editId']."';";
		$editResult = mysqli_query($conn,$sql);
		$editRow = mysqli_fetch_assoc($editResult);
	}




	if(isset($_POST['adauga-submit']))
	{
		$nume = $_POST['numeProdus'];
		$idP = $_POST['idProdus'];
		$desc = $_POST['descProdus'];
		$tag = $_POST['selectProdus'];
		$pret = $_POST['pretProdus'];
		$img = $_FILES['imgProdus']['name'];

		if(empty($nume) || empty($desc) || empty($tag) || empty($pret))
		{
			
			header("Location: admin_edit_pg?editId=".$idP."");
			exit();
		}
		else
		{
			if(empty($img))
			{
				$sql = "UPDATE produse SET titlu = ?, tag = ?, descriere = ?, pret = ? WHERE id_produs = '".$idP."' ;";

			}
			else
			{
				$sql = "UPDATE produse SET titlu = ?, tag = ?, descriere = ?, pret = ?, image = ? WHERE id_produs = '".$idP."';";
			}
			
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: admin_edit_pg?editId=".$idP."");
				exit();
			}
			else
			{
				if(empty($img))
				{
					mysqli_stmt_bind_param($stmt, "ssss", $nume,$tag,$desc,$pret);
				}
				else
				{
					mysqli_stmt_bind_param($stmt, "sssss", $nume,$tag,$desc,$pret,$img);
				}
				mysqli_stmt_execute($stmt);


				if(!empty($img))
				{
					$sql2 = "SELECT * FROM produse WHERE id_produs = '".$idP."';";
					$result = mysqli_query($conn,$sql2);
					$row = mysqli_fetch_assoc($result);
					$ext= pathinfo($_FILES['imgProdus']['name'])['extension'];
					$pnume = $row['id_produs'].".".$ext;
					$sql = "UPDATE produse SET image = '".$pnume."' WHERE id_produs = '".$idP."' ;";
					mysqli_query($conn,$sql);
					if(isset($_FILES['imgProdus']))
					{
						move_uploaded_file($_FILES['imgProdus']['tmp_name'], "../images/product_images/".$row['id_produs'].".".$ext);
					}
				}
				header("Location: admin_panel_pg");
				exit();
				}
				
			}

	}


?>