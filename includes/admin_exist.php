<?php

	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
		

?>