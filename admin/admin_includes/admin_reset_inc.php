<?php

	if(isset($_POST['resetSubmit']))
	{
		$psw = $_POST['psw'];

		if(empty($psw))
		{
			header("Location: admin_reset_pg");
			exit();
		}
		else
		{
			$sql = "SELECT password FROM users;";
			$result = mysqli_query($conn, $sql);
			$pswDB = mysqli_fetch_assoc($result);
			$pwdCheck = password_verify($psw, $pswDB['password']);
			if($pwdCheck == false)
			{
				header("Location: admin_reset_pg");
				exit();
			}
			else
			{
				$sqlDel = "DELETE FROM users;";
				mysqli_query($conn,$sqlDel);
				session_start();
				session_unset();
				session_destroy();
				header("Location: index");
				exit();
			}

		}
		


	}

?>