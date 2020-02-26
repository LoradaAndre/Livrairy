<h3 class="font-italic">DVD</h3>
<div class="container">
	<div class="row">

<?php

foreach ($dvd5Last as $last5D){
?>
<div class="col-lg-2 border m-3 shadow p-3 mb-5 bg-white rounded">
	<!-- Image -->
	<div class="p-2">
		<img class="img-fluid" src="public/images/article.jpg" alt="" width="100%">
		<div class="font-weight-bold text-center">
			<a href="?page=detailDvd&id=<?= $last5D["DVD_ID"] ?>&name=<?= $last5D["DVD_TITRE"] ?>">
				<?php
				echo $last5D["DVD_TITRE"];
				 ?>
			</a>
		</div>
		<div class="">
			<?php echo "Sortie: " . $last5D["DVD_DATE_PARUTION"]; ?>
		</div>
		<div class="font-weight-bold text-right">
			<?php echo $last5D["DVD_PRIX"] . "€"; ?>
		</div>
	 </div>
</div>
<?php
}
?>
</div>
</div>
