<?php

session_start();

if(!isset($_GET["page"]))
	$_GET["page"] = "index";

$mainContent = getPageContent($_GET["page"]);
include("view/base.php");

function getPageContent($page) {
	ob_start();
	switch ($_GET["page"]) {
		case 'index':
			require_once("controller/LivreController.php");
			LivreConstroller::index();

			break;

		default:
			include("view/error/error_404.php");
			break;
	}

	return ob_get_clean();
}
