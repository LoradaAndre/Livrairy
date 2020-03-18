<?php
//On démarre la session
session_start();

//On vérifie le contenu de la variable $_GET["page"]
if(!isset($_GET["page"]))
	//Si elle ne contient rien, on lui met "accueil", correspondant à la page principale
	$_GET["page"] = "accueil";

$mainContent = getPageContent($_GET["page"]);
$page = $_GET["page"];

//on inclus la vue de base
include("view/pagedebase.php");

function getPageContent($page) {
	ob_start();

	//on vérifie sur quelle page on est
	switch ($_GET["page"]) {
		case 'accueil':
			require_once("controller/AccueilController.php");
			AccueilController::index();

			break;

		case 'resRecherche':
			require_once("controller/RechercheController.php");
			RechercheController::index();

			break;

		case 'alertes':
			require_once("controller/AlerteStockController.php");
			AlerteStockController::index();

			break;

		case 'detailLivre':
			require_once("controller/DetailLivreController.php");
			DetailLivreController::index();

			break;

		case 'detailCd':
			require_once("controller/DetailCdController.php");
			DetailCdController::index();

			break;

		case 'detailDvd':
			require_once("controller/DetailDvdController.php");
			DetailDvdController::index();

			break;

		case 'connect':
			require_once("controller/ConnectionController.php");
			ConnectionController::index();

			break;

		case 'profil':
			require_once("controller/ProfilController.php");
			ProfilController::index();

			break;

		//si on a autre chose que index, on inclus une error
		default:
			include("view/error/error_404.php");
			break;
	}
	//retourne en quelque sorte la valeur de $_GET["page"]
	return ob_get_clean();
}
