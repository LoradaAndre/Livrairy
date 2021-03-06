<div class= "modal fade" id= "exampleModal" tabindex= "-1" role= "dialog" aria-labelledby= "exampleModalLabel" aria-hidden= "true" >
	<div class= "modal-dialog" role= "document" >
		<div class= "modal-content" >
			<div class= "modal-header" >
				<h5 class= "modal-title" id= "exampleModalLabel" > New message </h5>
				<button type= "button" class= "close" data-dismiss= "modal" aria-label= "Close" >
					<span aria-hidden= "true" > &times; </span>
				</button>
			</div>
			<div class= "modal-body" >
				<form action="gestionStock.php" method="post">
					<!-- 1ère ligne: Titre -->
					<div class= "form-group" >
						<label for= "recipient-name" class= "col-form-label" > Titre: </label>
						<input type= "text" class= "form-control" id= "titre" >
					</div>
					<!-- 1ère ligne: Réalisateur / Date -->
					<div class="form-row">
						<div class= "form-group col-md-8" >
							<label for= "message-text" class= "col-form-label" > Réalisateur: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
						<div class= "form-group col-md-4" >
							<label for= "message-text" class= "col-form-label" > Date de parution: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
					</div>
					<!-- .................................. -->
					<div class="form-row">
						<div class= "form-group col-md-4" >
							<label for= "message-text" class= "col-form-label" > Durée: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
						<div class= "form-group col-md-4" >
							<label for= "message-text" class= "col-form-label" > Format: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
						<div class= "form-group col-md-4" >
							<label for= "message-text" class= "col-form-label" > Disque: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
					</div>
					<!-- .................................. -->
					<div class="form-row">
						<div class= "form-group col-md-6" >
							<label for= "message-text" class= "col-form-label" > Quantité: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
						<div class= "form-group col-md-6" >
							<label for= "message-text" class= "col-form-label" > Prix: </label>
							<input type= "text" class= "form-control" id= "auteur" >
						</div>
					</div>

				</form>
			</div>
			<div class= "modal-footer">
				<button type= "button" class= "btn btn-secondary" data-dismiss= "modal" > Annuler </button>
				<button type= "button" class= "btn btn-primary" > Valider </button>
			</div>
		</div>
	</div>
</div>
