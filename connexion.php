<?php 
	$connexion  = mysqli_connect(
								"localhost",
								"root",
								"siby",
								"gestion_des_utulisateurs"
								);
	if(mysqli_connect_errno())
	{
		echo "eureur de connexion"
		.mysql_connect_error();
	}
?>