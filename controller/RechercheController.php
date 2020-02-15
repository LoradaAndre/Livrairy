<?php

require_once("model/LivreDao.php");

class RechercheController {

		static function index() {
			$daoLivre = new LivreDao();

			$allLivres = $daoLivre->getall();
			if(isset($_GET["recherche"])) {
				$searchLivre = $daoLivre->getByName($_GET["recherche"]);
			}
			include("view/accueil/redir.php");
		}
}
