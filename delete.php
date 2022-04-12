<?php 
	include "connexion.php" ;
	$query = "DELETE FROM user WHERE id_user = '$_GET[id]' ";

	if(mysqli_query($connexion, $query))
	{
		header('location:acceuil.php');
	}
	else 
	{
		echo "Delete Data Failed";
		mysql_error();
	}
?>