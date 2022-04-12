<?php 
	include "connexion.php" ;
	$data = mysqli_query ($connexion, "SELECT * from user where id_user = '$_GET[id]' " );
	$row = mysqli_fetch_array($data) ;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud avec PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Crud avec PHP MySQL</h1>
	  			By : <a href="#">LASSANA SIBY</a>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<div class="card">
	  				<div class="card-body">
	  					<div class="col-md-12">
	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Nom
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['nom'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Telephone
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['telephone'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Adresse
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['adresse'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 mt-3 mb-3">
	  							<a href="accueil.php" class="btn btn-primary float-end">Retour home</a>
	  						</div>
	  					</div>
	  				</div>	  				
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
