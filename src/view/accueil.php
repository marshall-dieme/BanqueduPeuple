<?php
	require_once '../model/database.php';
	include_once 'topBar.php';
	$compte = countCompte();
	
	$client = countClient();
	
	
	$sommeCompte = SommeCompte();
	


?>
<br>
<div class="row">
	<div class="col s4"></div>

	<div class="col s4"></div>

	<div class="col s4 grey darken-1" >
		<article class="clock">
  			<div class="hours-container">
    			<div class="hours"></div>
  			</div>
 			 <div class="minutes-container">
   				<div class="minutes"></div>
  			</div>
  			<div class="seconds-container">
    			<div class="seconds"></div>
			</div>
		</article>
	</div>
</div>
<br>
<div class="row">
	<div class="col s3 yellow darken-4 white-text">
		<h3 style="text-align:center"><?php echo $compte[0];?></h3>
		<h4 style="text-align:center">Comptes</h4><br>
	</div>
	
	<div class="col s3 deep-purple darken-3 white-text">
		<h3 style="text-align:center"><?php echo $client[0];?></h3>
		<h4 style="text-align:center">Clients</h4><br>
	</div>
	
	<div class="col s3  darken-4 white-text">
		
	</div>
	
	<div class="col s3  red darken-3 white-text">
		<h3 style="text-align:center"><?php echo $sommeCompte[0];?></h3>
		<h4 style="text-align:center">Total</h4><br>
	</div>
	
</div>