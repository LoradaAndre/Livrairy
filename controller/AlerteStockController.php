<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class AlerteStockController{

		static function index() {
			$daoLivre = new LivreDao();
			$daoCd = new CD_Dao();
			$daoDvd = new DVD_Dao();

			$livreAlerteRouge  = $daoLivre->getAlerteRougeLivre();
			$cdAlerteRouge  = $daoCd->getAlerteRougeCd();
			$dvdAlerteRouge  = $daoDvd->getAlerteRougeDvd();

			$livreAlerteOrange  = $daoLivre->getAlerteOrangeLivre();
			$cdAlerteOrange  = $daoCd->getAlerteOrangeCd();
			$dvdAlerteOrange  = $daoDvd->getAlerteOrangeDvd();

			$livreOutOfStock  = $daoLivre->getRuptureDeStockLivre();
			$cdOutOfStock  = $daoCd->getRuptureDeStockCd();
			$dvdOutOfStock  = $daoDvd->getRuptureDeStockDvd();

			include("view/alertesStock/pageAlerte.php");
		}
}
