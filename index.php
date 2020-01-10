<?php
	require_once 'src/model/database.php';
	include_once 'src/view/topBar.php';
	$compte = countCompte();
	
	$client = countClient();
	

	
	if ($compte[0] == 0) {
		$sommeCompte = 0;
	} else {
		$sommeCompte = SommeCompte();
	}
	
	
	

?>

<br><br><br><br><br><br>
<div class="row">
	<div class="col s3 m yellow darken-4 white-text">
		<h3 style="text-align:center"><?php echo $compte[0];?></h3>
		<h4 style="text-align:center">Comptes</h4><br>
	</div>
	
	<div class="col s3 deep-purple darken-3 white-text">
		<h3 style="text-align:center"><?php echo $client[0];?></h3>
		<h4 style="text-align:center">Clients</h4><br>
	</div>
	
	<div class="col s3 deep-green darken-3 white-text">
		
	</div>
	

	
	<div class="col s3  red darken-3 white-text">
		<h3 style="text-align:center"><?php 
		if ($compte[0] == 0) {
			echo $sommeCompte;
		} else {
			echo $sommeCompte[0];
		}
		
		?></h3>
		<h4 style="text-align:center">Total</h4><br>
	</div>
	
</div>

