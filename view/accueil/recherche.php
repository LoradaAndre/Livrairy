<?php

 ?>

<h2>Résultats pour "<?php echo $_GET["recherche"]?>"</h2>


<?php

if($searchLivre != null) {
	echo "titre : " . $searchLivre["TITRE_LIVRE"] . " auteur : " . $searchLivre["AUTEUR_LIVRE"] .  " prix : " .  $searchLivre["PRIX"] . " quantite: " . $searchLivre["QUANTITE"] . "<br/>";
}else{
	echo "désolé, nous n'avons pas trouvé de résultatts corespondants";
}


?>
