<?php

include("view/gestionStock/header.php");

if($daoAllCd != null) {
	foreach ($daoAllCd as $cd) {
?>
	<div class="row align-items-center justify-content-md-center border-bottom">
		<div class="image col-lg-1">
			<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		</div>
		<div class="desc col-lg-6">
			<div class="titre">
				<?php echo "Titre : " . $cd["TITRE_CD"] ?>
			</div>
			<div class="row">
				<div class="auteur col-lg-5">
					<?php echo "Auteur : " . $cd["AUTEUR_CD"] ?>
				</div>
				<div class="nbChanson col-lg-4">
					<?php echo "Auteur : " . $cd["NB_CHANSONS"] ?>
				</div>
			</div>
			<div class="row">
				<div class="prix col-lg-4">
					<?php echo "Prix : " . $cd["PRIX"] ?>
				</div>
				<div class="quantite col-lg-5">
					<?php echo "Quantite : " . $cd["QUANTITE"] ?>
				</div>
			</div>
		</div>
			<?php include("view/gestionStock/boutons.html") ?>
	</div>

	<?php
	}
}

include("view/gestionStock/popup.php");
