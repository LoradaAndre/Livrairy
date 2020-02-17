<?php

include("view/gestionStock/header.php");

if($daoAllDvd != null) {
	foreach ($daoAllDvd as $dvd) {

?>
	<div class="row align-items-center justify-content-md-center border-bottom">
		<div class="image col-lg-1">
			<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		</div>
		<div class="desc col-lg-6">
			<div class="titre">
				<?php echo "Titre : " . $dvd["TITRE_DVD"] ?>
			</div>
			<div class="auteur">
				<?php echo "Auteur : " . $dvd["REALISATEUR"] ?>
			</div>
			<div class="description">
				<?php echo "Synopsis : " . $dvd["DESCRIPTION"] ?>
			</div>
			<div class="row">
				<div class="prix col-lg-4">
					<?php echo "Prix : " . $dvd["PRIX"] ?>
				</div>
				<div class="quantite col-lg-5">
					<?php echo "Quantite : " . $dvd["QUANTITE"] ?>
				</div>
			</div>
		</div>
			<?php include("view/gestionStock/boutons.html") ?>
	</div>

	<?php
	}
}

include("view/gestionStock/popup.php");
