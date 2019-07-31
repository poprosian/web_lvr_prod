<?php
	
	if(isset($_POST['adauga-submit']))
	{
		$nume = $_POST['numeProdus'];
		$desc = $_POST['descProdus'];
		$tag = $_POST['selectProdus'];
		$img = $_FILES['imgProdus']['name'];


		if(empty($nume) || empty($desc) || empty($tag) || empty($img))
		{
			header("Location: admin_add_pg");
			exit();
		}
		else if($tag == 'NULL')
		{
			header("Location: admin_add_pg");
			exit();
		}
		else
		{
			$sql = "INSERT INTO produse (titlu, tag, descriere, image) VALUES(?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: admin_add_pg");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt, "ssss", $nume,$tag,$desc,$img);
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