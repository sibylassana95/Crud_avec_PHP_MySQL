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
	  			By : <a href="#">Lassana siby</a>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<a href="add.php" class="btn btn-primary mb-4">Ajouter des membres</a>
	  			<a href="index.php" class="btn btn-primary mb-4">Deconnexion</a>
	  			<table class="table">
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Nom</th>
				      <th>Telephone</th>
				      <th>Adresse</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		include "connexion.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($connexion, 
				  							  "SELECT * FROM user ORDER BY id_user DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
				    <tr>
				      <td><?php echo $no++ ; ?></td>
				      <td><?php echo $row['nom'] ; ?></td>
				      <td><?php echo $row['telephone'] ; ?></td>
				      <td><?php echo $row['adresse'] ; ?></td>
				      <td>
				      	<a href="detail.php?id=<?php echo $row['id_user'] ; ?>" class="btn btn-primary btn-sm">Detail</a> 
				      	<a href="edit.php?id=<?php echo $row['id_user'] ; ?>" class="btn btn-success btn-sm">Edit</a> 
				      	<a href="delete.php?id=<?php echo $row['id_user'] ; ?>"  class="btn btn-danger btn-sm">Delete</a>
				      </td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
