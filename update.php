<?php 
	include "connexion.php" ;

	$id = $_POST['id_user'] ;
	$nama = $_POST['nama'] ;
	$telepon = $_POST['telepon'] ;
	$alamat = $_POST['alamat'] ;

	$query = "UPDATE user SET 
							  nom = '$nama',
							  telephone = '$telepon',
							  adresse = '$alamat'
							  Where 
							  id_user = '$id'
			 " ;
	if(mysqli_query($connexion, $query))
	{
		header('location:acceuil.php');
	}
	else 
	{
		echo "Update Data Failed";
		mysql_error() ;
	}
?>