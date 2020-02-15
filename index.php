<?php
//On démarre la session
session_start();

//On vérifie le contenu de la variable $_GET["page"]
if(!isset($_GET["page"]))
	//Si elle ne contient rien, on lui met "accueil", correspondant à la page principale
	$_GET["page"] = "accueil";

$mainContent = getPageContent($_GET["page"]);
//on inclus la vue de base
include("view/page_accueil.php");

function getPageContent($page) {
	ob_start();
	switch ($_GET["page"]) {
		//On apelle les controleurs utiles pour la page index
		case 'accueil':
			require_once("controller/IndexController.php");
			IndexController::index();

			break;
		case 'gestionStock':
			require_once("controller/StockController.php");
			StockController::index();
			break;
			
		case 'resRecherche':
			require_once("controller/RechercheController.php");
			RechercheController::index();
			break;
		// case 'dvd'
		// 	require_once("controller/DVD_Controller.php");
		// 	DVD_Controller::index();
		//
		// 	break;
		//
		// case 'cd'
		// 	require_once("controller/CD_Controller.php");
		// 	CD_Controller::index();
		//
		// 	break;
		//
		// case 'livres'
		// 	require_once("controller/LivreController.php");
		// 	LivreController::index();
		//
		// 	break;

		//si on a autre chose que index, on inclus une error
		default:
			include("view/error/error_404.php");
			break;
	}
	//retourne en quelque sorte la valeur de $_GET["page"]
	return ob_get_clean();
}
