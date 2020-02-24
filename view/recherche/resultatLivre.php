<?php
foreach ($searchLivre as $livre) {
?>
	<div class="row align-items-center justify-content-md-center border-bottom">
		<!-- 1ère partie: Image -->
		<div class="image col-lg-1">
			<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		</div>

		<!-- 2ère partie: Descriptif article -->
		<div class="desc col-lg-6">

			<!-- Titre -->
			<div class="row">
				<a href="?page=detailLivre&id=<?= $livre["LIV_ID"] ?>&name=<?= $livre["LIV_TITRE"] ?>">
<?php
					echo "Titre : " . $livre["LIV_TITRE"];
?>
				</a>

			</div>

			<!-- Auteur / Editeur -->
			<div class="row">
				<div class="col-lg-5">
					<?php echo "Auteur : " . $livre["AUTLIV_NOM"] . " " . $livre["AUTLIV_PRENOM"] ?>
				</div>
				<div class="col-lg-5">
					<?php echo "Editeur : " . $livre["EDI_LIBELLE"] ?>
				</div>
			</div>

			<!-- Date de parution-->
			<div class="row">
				<div class="col-lg-12">
					<?php echo "Date de parution : " . $livre["LIV_DATE_PARUTION"] ?>
				</div>
			</div>

			<!-- Support / Genre / Langue-->
			<div class="row">
				<div class="col-lg-4">
					<?php echo "Support : " . $livre["SUPP_LIBELLE"] ?>
				</div>
				<div class="col-lg-4">
					<?php echo "Genre : " . $livre["GENLIV_LIBELLE"] ?>
				</div>
				<div class="col-lg-4">
					<?php echo "Langue : " . $livre["LAN_LIBELLE"] ?>
				</div>
			</div>

			<!-- ISBN / Prix / Quantite-->
			<div class="row">
				<div class="col-lg-5">
					<?php echo "ISBN : " . $livre["LIV_ISBN"] ?>
				</div>
				<div class="col-lg-4">
					<?php echo "Prix : " . $livre["LIV_PRIX"] ?>
				</div>
				<div class="col-lg-3">
					<?php echo "Quantite : " . $livre["LIV_QUANTITE"] ?>
				</div>
			</div>
		</div>
		<!-- 3ère partie: Boutons -->

		<?php include("view/recherche/boutons.html") ?>

	</div>

	<?php
}
