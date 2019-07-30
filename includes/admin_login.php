<?php

	if(isset($_POST['submitLogIn']))
	{
		$userLog = $_POST['userNameLog'];
		$passwordLog = $_POST['userPasswordLog'];

		if(empty($userLog) || empty($passwordLog))
		{
			header("Location: ../admin/index?error=empty");
			exit();
		}
		else
		{
			$sqlLog = "SELECT * FROM users WHERE user_name = ?;";
			$stmtLog = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmtLog, $sqlLog))
			{
				header("Location: ../admin/index?error=sqlerror");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmtLog, "s", $userLog);
				mysqli_stmt_execute($stmtLog);
				$result = mysqli_stmt_get_result($stmtLog);
				if($row = mysqli_fetch_assoc($result))
				{
					$pwdCheck = password_verify($passwordLog, $row['password']);
					if($pwdCheck == false)
					{
						header("Location: ../admin/index?error=wrongpsw");
						exit();
					}
					else if($pwdCheck == true)
					{
						session_start();
						$_SESSION['user'] = $row['user_name'];
						header("Location: ../admin/panel");
						exit();
					}
					else
					{
						header("Location: ../admin/index?error=wrongpsw");
						exit();
					}
				}
				else
				{
					header("Location: ../admin/index?error=nouser");
					exit();
				}
			}
		}
	}

?>