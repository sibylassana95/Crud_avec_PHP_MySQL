<!DOCTYPE html>
<html>
<head>
	<title>Operation avec CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Crud avec PHP MySQL</h1>
	  			By : <a href="#">Lassana siby</a>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<form method="post" action="input.php">
		  			<div class="mb-3">
					  <label class="form-label">Nom</label>
					  <input type="text" name="nama" class="form-control">
					</div>

		  			<div class="mb-3">
					  <label class="form-label">Telephone</label>
					  <input type="text" name="telepon" class="form-control">
					</div>

					<div class="mb-3">
					  <label class="form-label">adresse</label>
					  <textarea name="alamat" class="form-control" rows="3"></textarea>
					</div>

					<div class="mb-3 text-end">
					  <a href="acceuil.php" class="btn btn-success">Retour home</a>
					  <button type="submit" class="btn btn-primary ml-2">Ajouter</button>
					</div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
