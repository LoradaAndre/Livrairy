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
		<header class="container">
			<p>logo<p>
			<form class="Recherche" action="src/redir.php" method="post">
				<input type="text" name="recherchesaisie" value="">
				<input type="submit" value="Rechercher">
			</form>
			<p>Compte</p>
			<p>Pannier</p>
			<p>option</p>
			<p><a href="advancedSetting.html">options avancées</a></p>
			<hr/>
		</header>
		<hr/>

		<section class="element article">
			<?= isset($mainContent) ? $mainContent : "" ?>
		</section>


	</body>
</html>
