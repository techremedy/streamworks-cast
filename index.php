<?php

//load WaterData class	
require_once('classes/WaterData.php');

//create WaterData Object
$waterData = new WaterData;

?>


<?php require_once('header.php'); ?>

<div class="row">
  <div class="col-md-6">
	<div class="row">
	  <h1>Current Flows</h1>
		<div class="col-md-4">
			<h2>Fanny Bridge</h2>
			<?php
				$fanny = $waterData->getWaterData("10337500"); 
				print($fanny);
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Truckee</h2>
			<?php
				$truckee = $waterData->getWaterData("10338000"); 
				print($truckee);
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Boca Bridge</h2>
			<?php
				$boca = $waterData->getWaterData("10344505"); 
				print($boca);
			?>
			<hr>
		</div><!-- .station -->
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>LT abv Boca</h2>
			<?php
				$ltabvboca = $waterData->getWaterData("10344400"); 
				print($ltabvboca);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>LT Boca Dam</h2>
			<?php
				$ltbocadam = $waterData->getWaterData("10344500"); 
				print($ltbocadam);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Farad</h2>
			<?php
				$farad = $waterData->getWaterData("10346000"); 
				print($farad);
			?>
			<hr>
		</div><!-- .station -->		
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Reno</h2>
			<?php
				$reno = $waterData->getWaterData("10348000"); 
				print($reno);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Glendale Ave</h2>
			<?php
				$glendale = $waterData->getWaterData("10348036"); 
				print($glendale);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Vista Ave</h2>
			<?php
				$vista = $waterData->getWaterData("10350000"); 
				print($vista);
			?>
			<hr>
		</div><!-- .station -->	
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Tracy</h2>
			<?php
				$tracy = $waterData->getWaterData("10350340"); 
				print($tracy);
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Derby Dam</h2>
			<?php
				$derby = $waterData->getWaterData("10351600"); 
				print($derby);
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Wadsworth</h2>
			<?php
				$wadsworth = $waterData->getWaterData("10351650"); 
				print($wadsworth);
			?>
			<hr>
		</div><!-- .station -->	
	</div><!--end row-->
	<div class="row">
	  <div class="col-md-12">
	  
	  	<h3>
	  	  <em>
	  	  	<?php 
	  	  	  $time = $waterData->getWaterData('time');
	  	  	  print('All data current as of ' . $time[0] . ' at ' . $time[1] . ' Pacific Time.');
			?>
		  </em>
		</h3>
	  
	  </div><!--end col-md-12-->
	</div><!--end row-->
  </div><!--end col-md-6-->
  <div class="col-md-6">
    <h2 id="date-time"></h2>
    <div class="logo">
      <img src="images/logo.png" width="80%" align="right">
    </div>
  </div><!--end col-md-6-->
</div><!--end row-->

<?php require_once('footer.php'); ?>

