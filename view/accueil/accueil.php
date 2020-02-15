<?php
	if(!isset($searchLivre)){
		$searchLivre = null;
	}

 ?>

 <form class="a" action="index.php" method="get">
	<input type="hidden" name="page" value="resRecherche"/>
	<input type="text" name="recherche" value="">
	<input type="submit" value="">
</form>

<?php
// foreach($allLivres as $l) {

// 	echo "titre : " . $l["TITRE_LIVRE"] . " auteur : " . $l["AUTEUR_LIVRE"] .  " prix : " .  $l["PRIX"] . " quantite: " . $l["QUANTITE"] . "<br/>";
// }

?>
