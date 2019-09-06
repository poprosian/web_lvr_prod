<?php
	
	if(isset($_POST['adauga-submit']))
	{
		$nume = $_POST['numeProdus'];
		$desc = $_POST['descProdus'];
		$tag = $_POST['selectProdus'];
		$pret = $_POST['pretProdus'];
		$img = $_FILES['imgProdus']['name'];


		if(empty($nume) || empty($desc) || empty($tag) || empty($pret) || empty($img))
		{
			$message = 'Numele / Descrierea / Categoria / Pretul / Imaginea nu pot sa fie goale.';
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		else if($tag == 'NULL')
		{
			header("Location: admin_add_pg");
			exit();
		}
		else
		{
			$sql = "INSERT INTO produse (titlu, tag, descriere, pret, image) VALUES(?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: admin_add_pg");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt, "sssss", $nume,$tag,$desc,$pret,$img);
				mysqli_stmt_execute($stmt);

				$sql2 = "SELECT * FROM produse WHERE titlu = '".$nume."' AND descriere = '".$desc."';";
				$result = mysqli_query($conn,$sql2);
				$resultCheck = mysqli_num_rows($result);
				$row = mysqli_fetch_assoc($result);
				$ext= pathinfo($_FILES['imgProdus']['name'])['extension'];
				$pnume = $row['id_produs'].".".$ext;
				$sql = "UPDATE produse SET image = '".$pnume."' WHERE id_produs = '".$row['id_produs']."' ;";
				mysqli_query($conn,$sql);
				if(isset($_FILES['imgProdus']))
				{
					move_uploaded_file($_FILES['imgProdus']['tmp_name'], "../images/product_images/".$row['id_produs'].".".$ext);
				}
				header("Location: admin_panel_pg");
				exit();
				}
				
			}

	}


?>