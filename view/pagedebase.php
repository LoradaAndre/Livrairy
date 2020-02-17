<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="src/styles/theme_bootstrap.css">
		<link rel="stylesheet" href="public/css/style.css">

		<title>Livr'airy</title>
	</head>
	<body>
		<!-- header commun à la page -->
		<!-- <p>logo<p>
			<form class="Recherche" action="src/redir.php" method="post">
				<input type="text" name="recherchesaisie" value="">
				<input type="submit" value="Rechercher">
			</form>
			<p>Compte</p>
			<p>Pannier</p>
			<p>option</p>
			<p><a href="view/gestionStock.php">gestion de stock</a></p>
			<hr/> -->

		<?php  include("view/accueil/navbarre1.php"); ?>

		<?php   ?>

		<?php
			switch ($page) {
				case 'accueil':
					include("view/accueil/header.php");
					include("view/accueil/navbarre2.php");
					break;
			}

		?>

		<main class="container">
			<?= isset($mainContent) ? $mainContent : "" ?>
		</main>

		<footer></footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="public/js/navbarre1.js"></script>
		<?php

			// Js spécifique à une page
			switch ($page) {
				case 'gestionStock':
				?>
					<script type="text/javascript" src="public/js/gestionStock.js"></script>
				<?php
					break;


			}
		?>


	</body>
</html>
