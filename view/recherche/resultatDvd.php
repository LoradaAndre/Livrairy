<?php
foreach ($searchDvd as $dvd) {
?>
	<div class="row align-items-center justify-content-md-center border-bottom">
		<!-- 1ère partie: Image -->
		<div class="image col-lg-1">
			<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		</div>
		<!-- 2ère partie: Descriptif de l'article -->
		<div class="desc col-lg-6">
			<!-- Titre -->
			<div class="row">
				<a href="?page=detailDvd&id=<?= $dvd["DVD_ID"] ?>&name=<?= $dvd["DVD_TITRE"] ?>">
					<?php
					echo "Titre : " . $dvd["DVD_TITRE"];
					 ?>
				</a>
			</div>
			<!-- Réalisateur -->
			<div class="row">
				<div class="col-lg-5">
					<?php echo "Realisateur : " . $dvd["READVD_NOM"] . " " . $dvd["READVD_PRENOM"] ?>
				</div>
			</div>
			<!-- Date de parution-->
			<div class="row">
				<div class="col-lg-12">
					<?php echo "Date de parution : " . $dvd["DVD_DATE_PARUTION"] ?>
				</div>
			</div>
			<!-- Format / Audio / Sous-titres -->
			<div class="row">
				<div class="col-lg-4">
					<?php echo "Format : " . $dvd["FOR_LIBELLE"] ?>
				</div>
				<div class="col-lg-4">
					<?php echo "Audio : ";
					// . $dvd[""] ?>
				</div>
				<div class="col-lg-4">
					<?php echo "Sous-titre : ";
					// . $dvd[""] ?>
				</div>
			</div>
			<!-- Nombre de Dvd/ Durée -->
			<div class="row">
				<div class="col-lg-4">
					<?php echo "Nombre dvd : " . $dvd["DVD_NB_DISQUE"] ?>
				</div>
				<div class="col-lg-5">
					<?php echo "Duree : " . $dvd["DVD_DUREE"] ?>
				</div>
			</div>
			<!-- Prix / Quantite -->
			<div class="row">
				<div class="col-lg-6">
					<?php echo "Prix : " . $dvd["DVD_PRIX"] ?>
				</div>
				<div class="col-lg-6">
					<?php echo "Quantite : " . $dvd["DVD_QUANTITE"] ?>
				</div>
			</div>
		</div>

		<!-- 3ème partie: Bouttons -->
		<?php include("view/recherche/boutons.html") ?>
	</div>

	<?php
}
