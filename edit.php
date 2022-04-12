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
	  			<form method="post" action="update.php">
	  				<input type="hidden" name="id_user" value="<?php echo $row['id_user'] ; ?>">
		  			<div class="mb-3">
					  <label class="form-label">Nom</label>
					  <input type="text" name="nama" class="form-control" value="<?php echo $row['nom'] ; ?>">
					</div>

		  			<div class="mb-3">
					  <label class="form-label">Telephone</label>
					  <input type="text" name="telepon" class="form-control" value="<?php echo $row['telephone'] ; ?>">
					</div>

					<div class="mb-3">
					  <label class="form-label">Adresse</label>
					  <textarea name="alamat" class="form-control" rows="3"><?php echo $row['adresse'] ; ?></textarea>
					</div>

					<div class="mb-3 text-end">
					  <a href="accueil.php" class="btn btn-success">Retour home</a>
					  <button type="submit" class="btn btn-primary ml-2">Modifier</button>
					</div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
