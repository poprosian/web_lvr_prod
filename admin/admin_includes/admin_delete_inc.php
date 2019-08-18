<?php
	

	$sql = " SELECT * FROM produse;";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id_produs'];
		if(isset($_POST['x-'.$id.'']))
		{     
	    	$sql2 = "DELETE FROM produse WHERE id_produs = '".$id."';";
	    	mysqli_query($conn,$sql2);
	    	unlink("../images/product_images/".$row['image']."");

		}
	}

	


?>