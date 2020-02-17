<?php

include("view/gestionStock/header.php");

if($daoAllLivre != null) {
	foreach ($daoAllLivre as $livre) {
		//echo "titre : " . $livre["TITRE_LIVRE"] . " auteur : " . $livre["AUTEUR_LIVRE"] .  " prix : " .  $livre["PRIX"] . " quantite: " . $livre["QUANTITE"] . "<br/>";
?>
	<div class="row align-items-center justify-content-md-center border-bottom">
		<div class="image col-lg-1">
			<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		</div>
		<div class="desc col-lg-6">
			<div class="titre">
				<?php echo "Titre : " . $livre["TITRE_LIVRE"] ?>
			</div>
			<div class="auteur">
				<?php echo "Auteur : " . $livre["AUTEUR_LIVRE"] ?>
			</div>
			<div class="row">
				<div class="prix col-lg-4">
					<?php echo "Prix : " . $livre["PRIX"] ?>
				</div>
				<div class="quantite col-lg-5">
					<?php echo "Quantite : " . $livre["QUANTITE"] ?>
				</div>
			</div>
		</div>


	<?php include("view/gestionStock/boutons.html") ?>

	</div>

	<?php
	}
}

include("view/gestionStock/popup.php");
