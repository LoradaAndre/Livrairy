<h3 class="font-italic">Livres</h3>
<div class="container">
	<div class="row">

<?php

foreach ($livre5Last as $last5L){
?>
<div class="col-lg-2 border m-3 shadow p-3 mb-5 bg-white rounded">
	<!-- Image -->
	<div class="p-2">
		<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		<div class="font-weight-bold text-center">
			<a class="text-primary" href="?page=detailLivre&id=<?= $last5L["LIV_ID"] ?>&name=<?= $last5L["LIV_TITRE"] ?>">
<?php
				echo $last5L["LIV_TITRE"] . " - T" . $last5L["LIV_TOME"];
?>
			</a>
		</div>
		<div class="">
			<?php echo "Sortie: " . $last5L["LIV_DATE_PARUTION"]; ?>
		</div>
		<div class="font-weight-bold text-right">
			<?php echo $last5L["LIV_PRIX"] . "€"; ?>
		</div>
	 </div>
</div>
<?php
}
?>
</div>
</div>
