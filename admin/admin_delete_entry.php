<?php
	
	include '../includes/conn.php';

	if(isset($_GET['deleteId']))
	{     
		$id = $_GET['deleteId'];
    	$sql = "DELETE FROM produse WHERE id_produs = $id;";
    	$result = mysqli_query($conn,$sql);
	}


?>