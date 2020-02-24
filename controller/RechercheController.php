<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class RechercheController{

		static function index() {
			$daoLivre = new LivreDao();
			$daoCd = new CD_Dao();
			$daoDvd = new DVD_Dao();

			$allLivres = $daoLivre->getall();
			$allCd = $daoCd->getall();
			$allDvd = $daoDvd->getall();

			if(isset($_GET["recherche"])) {
				$searchLivre = $daoLivre->getByName($_GET["recherche"]);
				$searchDvd = $daoDvd->getByName($_GET["recherche"]);
				$searchCd = $daoCd->getByName($_GET["recherche"]);
			}
			include("view/recherche/resultatRecherche.php");
		}
}
