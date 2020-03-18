<nav class="navbar navbar-expand-sm navbar-dark bg-dark text-center">
	<!-- Logo Accueil -->
	<div class="navbar-brand col-lg-1">
		<a href="index.php"><img src="public/images/logo.png" alt="" width="60%" class="logo" ></a>
	</div>

	<!-- Barre de recherche -->
	<div class="col-lg-5">
		<form class="a" action="index.php" method="get">
		   <input type="hidden" name="page" value="resRecherche"/>
		   <div class="form-inline">
			   <input class="form-control mr-sm-4" type="search" placeholder="Rechercher" name="recherche" value="">
			   <button class="btn btn-outline-info my-2 my-sm-0 advanced" type="submit" value="">Rechercher</button>
		   </div>
	   </form>
	</div>

	<!-- Outils -->
	<div class="col-lg-6">
		<ul class="navbar-nav col-lg">
			<!-- Mes alertes -->
<?php
			$isAdmin = true;
			if($isAdmin) {
?>
			<li class="nav-item  col-lg-4 text-center">
				<a href="?page=alertes" class="nav-link">Mes Alertes</a>
			</li>
<?php
			}
?>
			<!-- Mon pannier -->
			<li class="nav-item  col-lg-4 text-center">
				<a href="#" class="nav-link">Mon Pannier</a>
			</li>
			<!-- Mon compte -->
			<li class="nav-item col-lg-4 text-center dropdown">
				<!-- <a href="#" class="nav-link">Mon Compte</a> -->
   			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mon Compte</a>
				<div class="dropdown-menu">
					<?php
					$isConnect = false;
					if($isConnect){
					?>
					<a class="dropdown-item" href="?page=profil">Mon Profil</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Déconnection</a>
					<?php
					}
					else{
					?>
						<a class="dropdown-item" href="?page=connect">Connection</a>
					<?php
					}
					 ?>

   		    	</div>
			</li>
		</ul>
	</div>

</nav>
