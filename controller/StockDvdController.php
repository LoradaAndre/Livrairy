<?php

require_once("model/DVD_Dao.php");

class StockDvdController {

		static function index() {
			// $daoCd = new CD_Dao();
			$daoDvd = new DVD_Dao();

			$daoAllDvd = $daoDvd->getAll();


			include("view/gestionStock/gestionStockDvd.php");
		}
}
