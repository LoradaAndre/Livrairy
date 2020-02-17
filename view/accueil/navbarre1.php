<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<div class="navbar-brand col-lg-1">
		<p>logo</p>
	</div>

	<div class="col-lg-5">
		<form class="a" action="index.php" method="get">
		   <input type="hidden" name="page" value="resRecherche"/>
		   <div class="form-inline">
			   <input class="form-control mr-sm-4" type="search" placeholder="Rechercher" name="recherche" value="">
			   <button class="btn btn-outline-info my-2 my-sm-0 advanced" type="submit" value="">Rechercher</button>
		   </div>
	   </form>
	</div>

	<div class="col-lg-6 nav-pill">
		<ul class="navbar-nav col-lg">
			<li class="nav-item col-lg-3 text-center">
				<a href="#" class="nav-link">compte</a>
			</li>
			<li class="nav-item  col-lg-3 text-center">
				<a href="#" class="nav-link">pannier</a>
			</li>
			<li class="nav-item  col-lg-3 text-center">
				<a href="#" class="nav-link">options</a>
			</li>

			<?php
				$isAdmin = true;
				if($isAdmin) {
			?>

			<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Options avancées</a>
		    	<div class="dropdown-menu">
		      		<a class="dropdown-item" href="#">Mes alertes</a>
		      		<a class="dropdown-item" href="index.php?page=gestionStockLivre">Gestion des stocks</a>
		      		<a class="dropdown-item" href="#">Commander</a>
		      		<div class="dropdown-divider"></div>
		      		<a class="dropdown-item" href="#">Separated link</a>
		    	</div>
			</li>

			<?php
				}
			?>
		</ul>
	</div>

</nav>
