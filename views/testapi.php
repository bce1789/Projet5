<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Geoapi</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<style type="text/css">
			#container{margin-top: 75px;}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#">Geoapi</a>
		</nav>

		<div class="container" id="container">
			<div class="starter-template">

				<?php if(!empty($error)):?>
					<div class="alert alert-danger"><?=$error;?></div>
				<?php endif;?>

				<?php if(!empty($success)):?>
					<div class="alert alert-success"><?= $success;?></div>
				<?php endif;?>

				<form action="" method="post">

				  <div class="form-group">
				    <label for="zipcode">Code Postal</label>
				    <input type="text" name="zipcode" class="form-control" placeholder="Code postal" id="zipcode">
				    <div style="display: none; color: #f55;" id="error-message"></div>
				  </div>

				  <div class="form-group">
				    <label for="city">Ville</label>
				    <select class="form-control" name="city" id="city">

				    </select>
				  </div>

				  <button type="submit" class="btn btn-primary">Envoyer</button>

				</form>

			</div>
		</div><!-- /.container -->


		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="assets\js\requestApi.js"></script>
	</body>
</html>