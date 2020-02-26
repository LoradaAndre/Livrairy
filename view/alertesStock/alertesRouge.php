
<?php

if(isset($livreAlerteRouge)){
	foreach ($livreAlerteRouge as $livre) {
	?>
		<div class="row align-items-center justify-content-md-center mt-3 border-left border border-danger p-2">
			<!-- 1ère partie: Image -->
			<div class="image col-lg-1">
				<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
			</div>

			<!-- 2ère partie: Descriptif article -->
			<div class="desc col-lg-6">

				<!-- Titre -->
				<div class="row">
					<div class="col-lg-12">
						<?php echo "Titre : " . $livre["LIV_TITRE"] ?>
					</div>
				</div>

				<!-- Prix / Quantite-->
				<div class="row">
					<div class="col-lg-6">
						<?php echo "Prix : " . $livre["LIV_PRIX"] ?>
					</div>
					<div class="col-lg-6 font-weight-bold">
						<?php echo "Quantite : <span class=\"text-danger\">" . $livre["LIV_QUANTITE"] ?> </span>
					</div>
				</div>
			</div>
			<!-- 3ère partie: Boutons -->

			<?php include("view/alertesStock/boutonsAlertes.html") ?>

		</div>
		<?php
	}
}
if(isset($cdAlerteRouge)){
	foreach ($cdAlerteRouge as $cd) {
	?>
		<div class="row align-items-center justify-content-md-center mt-3 border-left border border-danger p-2">
			<!-- 1ère partie: Image -->
			<div class="image col-lg-1">
				<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
			</div>

			<!-- 2ère partie: Descriptif article -->
			<div class="desc col-lg-6">

				<!-- Titre -->
				<div class="row">
					<div class="col-lg-12">
						<?php echo "Titre : " . $cd["CD_TITRE"] ?>
					</div>
				</div>

				<!-- Prix / Quantite-->
				<div class="row">
					<div class="col-lg-6">
						<?php echo "Prix : " . $cd["CD_PRIX"] ?>
					</div>
					<div class="col-lg-6 font-weight-bold">
						<?php echo "Quantite : <span class=\"text-danger\">" . $cd["CD_QUANTITE"] ?> </span>
					</div>
				</div>
			</div>
			<!-- 3ère partie: Boutons -->

			<?php include("view/alertesStock/boutonsAlertes.html") ?>

		</div>
		<?php
	}
}
if(isset($dvdAlerteRouge)){
	foreach ($dvdAlerteRouge as $dvd) {
	?>
		<div class="row align-items-center justify-content-md-center mt-3 border-left border border-danger p-2">
			<!-- 1ère partie: Image -->
			<div class="image col-lg-1">
				<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
			</div>

			<!-- 2ère partie: Descriptif article -->
			<div class="desc col-lg-6">

				<!-- Titre -->
				<div class="row">
					<div class="col-lg-12">
						<?php echo "Titre : " . $dvd["DVD_TITRE"] ?>
					</div>
				</div>

				<!-- Prix / Quantite-->
				<div class="row">
					<div class="col-lg-6">
						<?php echo "Prix : " . $dvd["DVD_PRIX"] ?>
					</div>
					<div class="col-lg-6 font-weight-bold">
						<?php echo "Quantite : <span class=\"text-danger\">" . $dvd["DVD_QUANTITE"] ?> </span>
					</div>
				</div>
			</div>
			<!-- 3ère partie: Boutons -->

			<?php include("view/alertesStock/boutonsAlertes.html") ?>

		</div>
		<?php
	}
}
