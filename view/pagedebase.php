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
		<!-- Affichage de la barre de recherche  -->
		<?php  include("view/accueil/navbarre.php"); ?>

		<!-- Affichage de l'image d'accueil si on est sur la page d'accueil -->
		<?php
			switch ($page) {
				case 'accueil':
					include("view/accueil/header.php");
					//include("view/accueil/corps.php");
					break;
			}

		?>

		<!-- Affichage du contenu de la page selon ou on se situe -->

		<main class="container">
			<?= isset($mainContent) ? $mainContent : "" ?>
		</main>

		<!-- Affichage du footer -->
		<footer>
		</footer>

		<!-- pour pouvoir utiliser JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- evenements js sur element bootstrap -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!-- .......... -->
		<script type="text/javascript" src="public/js/navbarre.js"></script>
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
