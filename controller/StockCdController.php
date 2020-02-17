<?php

require_once("model/CD_Dao.php");

class StockCdController {

		static function index() {
			// $daoCd = new CD_Dao();
			$daoCd = new CD_Dao();

			$daoAllCd = $daoCd->getAll();


			include("view/gestionStock/gestionStockCd.php");
		}
}
