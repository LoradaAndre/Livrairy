<h3 class="font-italic">CD</h3>
<div class="container">
	<div class="row">

<?php

foreach ($cd5Last as $last5C){
?>
<div class="col-lg-2 border m-3 shadow p-3 mb-5 bg-white rounded">
	<!-- Image -->
	<div class="p-2">
		<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		<div class="font-weight-bold text-center">
			<a href="?page=detailCd&id=<?= $last5C["CD_ID"] ?>&name=<?= $last5C["CD_TITRE"] ?>">
<?php
				echo $last5C["CD_TITRE"]
?>
			</a>
		</div>
		<div class="">
			<?php echo "Sortie: " . $last5C["CD_DATE_PARUTION"]; ?>
		</div>
		<div class="font-weight-bold text-right">
			<?php echo $last5C["CD_PRIX"] . "€"; ?>
		</div>
	 </div>
</div>
<?php
}
?>
</div>
</div>
