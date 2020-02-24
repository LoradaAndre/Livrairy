<?php
foreach ($searchCd as $cd) {
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
				<?php echo "Titre : " . $cd["CD_TITRE"] ?>
			</div>

			<!-- Auteur/Genre -->
			<div class="row">
				<div class="col-lg-6">
					<?php echo "Auteur : " . $cd["AUTCD_NOM"] . " " . $cd["AUTCD_PRENOM"] ?>
				</div>
				<div class="col-lg-6">
					<?php echo "Genre : " . $cd["GENMUS_LIBELLE"] ?>
				</div>
			</div>

			<!-- Date parution-->
			<div class="row">
				<div class="col-lg-12">
					<?php echo "Date de parution : " . $cd["CD_DATE_PARUTION"] ?>
				</div>
			</div>

			<!-- Nombre de titres / Nombre de CD -->
			<div class="row">
				<div class="col-lg-6">
					<?php echo "nombre titres : " . $cd["CD_NB_TITRE"] ?>
				</div>
				<div class="col-lg-6">
					<?php echo "nombre cd : " . $cd["CD_NB_CD"] ?>
				</div>
			</div>

			<!-- Prix / Quantite -->
			<div class="row">
				<div class="col-lg-6">
					<?php echo "Prix : " . $cd["CD_PRIX"] ?>
				</div>
				<div class="col-lg-6">
					<?php echo "Quantite : " . $cd["CD_QUANTITE"] ?>
				</div>
			</div>
		</div>

		<!-- 3ème partie: Bouttons -->
		<?php include("view/recherche/boutons.html") ?>
	</div>

	<?php
}
