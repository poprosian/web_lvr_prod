<?php
	include_once 'conn_inc.php';
	if(isset($_GET['globalSearch']))
	{
		$search = $_GET['globalSearch'];
		$sql = " SELECT * FROM produse WHERE LOWER(titlu) LIKE LOWER('%$search%') ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$results[] = $row;
			}
			echo json_encode($results);

		}
	}
	
?>