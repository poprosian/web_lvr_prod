<?php
	
	if(isset($_POST['adauga-submit']))
	{
		$nume = $_POST['numeProdus'];
		$desc = $_POST['descProdus'];
		$tag = $_POST['selectProdus'];
		$img = $_FILES['imgProdus']['name'];


		if(empty($nume) || empty($desc) || empty($tag) || empty($img))
		{
			header("Location: ../admin/adauga");
			exit();
		}
		else
		{
			$sql = "INSERT INTO produse (titlu, tag, descriere, image) VALUES(?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: ../admin/adauga");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt, "ssss", $nume,$tag,$desc,$img);
				mysqli_stmt_execute($stmt);
				if(isset($_FILES['imgProdus']))
				{
					move_uploaded_file($_FILES['imgProdus']['tmp_name'], "../images/".$_FILES['imgProdus']['name']);
				}
				header("Location: ../admin/panel");
				exit();
			}
		}

	}


?>