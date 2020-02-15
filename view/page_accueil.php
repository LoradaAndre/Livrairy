<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="src/styles/theme_bootstrap.css">
		<link rel="stylesheet" href="../public/style.css">

		<title>Librairy</title>
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

		<?php  include("view/accueil/header.html"); ?>


		<div class="imgAcc">
			<p>ici une image zoli<p>
		</div>

		<hr/>

		<nav class="barreNav">
			<ul>
				<li>Section1 (Livres) </li>
				<li>Section2(DVD)</li>
				<li>Section3(CD)</li>
			</ul>
		</nav>
		<hr/>
		<?= isset($mainContent) ? $mainContent : "" ?>

	</body>
</html>
