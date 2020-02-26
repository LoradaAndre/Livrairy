<?php

require_once("model/LivreDao.php");
require_once("model/CD_Dao.php");
require_once("model/DVD_Dao.php");

class DetailDvdController{

		static function index() {
			$daoDvd = new DVD_Dao();

			$dvdDetail = $daoDvd->getById($_GET["id"]);
			$simmRes = $daoDvd->getByName($_GET["name"]);

			include("view/detail/detailDvd.php");
		}
}
