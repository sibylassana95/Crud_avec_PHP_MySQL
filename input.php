<?php 
	include "connexion.php" ;
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$query = "INSERT INTO user set 
									nom = '$nama',
									telephone = '$telepon',
									adresse = '$alamat'
			 ";
	if(mysqli_query($connexion, $query)){
		header('location:acceuil.php');
	}
	else
	{
		echo "input data failed <br>";
		mysqli_error() ;
	}

?>