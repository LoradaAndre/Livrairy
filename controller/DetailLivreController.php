<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class DetailLivreController{

		static function index() {
			$daoLivre = new LivreDao();
			// $daoCd = new CD_Dao();
			// $daoDvd = new DVD_Dao();

			$livreDetail = $daoLivre->getById($_GET["id"]);
			$simmRes = $daoLivre->getByName($_GET["name"]);
			// $cdDetail = $daoCd->getByName($_GET["name_cd"]);

			// $allLivres = $daoLivre->getall();
			// // if(isset($_GET["recherche"])) {
			// // 	$searchLivre = $daoLivre->getByName($_GET["recherche"]);
			// // }
			// $livre5Last = $daoLivre->get5LastLivre();
			// $cd5Last = $daoCd->get5LastCd();
			// $dvd5Last = $daoDvd->get5LastDvd();

			include("view/detail/detailProduit.php");
		}
}
