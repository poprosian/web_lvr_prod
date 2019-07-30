<?php
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['userName'];
		$password = $_POST['userPassword'];
		$admpsw = $_POST['admPsw'];


		if(empty($username) || empty($password) || empty($admpsw))
		{
			header("Location: ../admin/index");
			exit();
		}
		else if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
		{
			header("Location: ../admin/index");
			exit();
		}
		else if($admpsw != "vvpsbe8evp")
		{
			header("Location: ../admin/index");
			exit();
		}
		else
		{
			$sql = "INSERT INTO users (user_name, password) VALUES (?,?);";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: ../admin/index");
				exit();
			}
			else
			{
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ss", $username,$hashedPassword);
				mysqli_stmt_execute($stmt);
				header("Location: ../admin/index");
				exit();
			}
		}
	}

?>