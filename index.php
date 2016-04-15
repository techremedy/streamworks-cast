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
				$fanny = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10337500&format=json"); 
				print($fanny);
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Truckee</h2>
			<?php
				$truckee = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10338000&format=json"); 
				print($truckee);
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Boca Bridge</h2>
			<?php
				$boca = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10344505&format=json"); 
				print($boca);
			?>
			<hr>
		</div><!-- .station -->
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>LT abv Boca</h2>
			<?php
				$ltabvboca = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10344400&format=json"); 
				print($ltabvboca);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>LT Boca Dam</h2>
			<?php
				$ltbocadam = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10344500&format=json"); 
				print($ltbocadam);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Farad</h2>
			<?php
				$farad = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10346000&format=json"); 
				print($farad);
			?>
			<hr>
		</div><!-- .station -->		
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Reno</h2>
			<?php
				$reno = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10348000&format=json"); 
				print($reno);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Glendale Ave</h2>
			<?php
				$glendale = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10348036&format=json"); 
				print($glendale);
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Vista Ave</h2>
			<?php
				$vista = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10350000&format=json"); 
				print($vista);
			?>
			<hr>
		</div><!-- .station -->	
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Tracy</h2>
			<?php
				$tracy = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10350340&format=json"); 
				print($tracy);
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Derby Dam</h2>
			<?php
				$derby = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10351600&format=json"); 
				print($derby);
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Wadsworth</h2>
			<?php
				$wadsworth = $waterData->getWaterData("http://waterservices.usgs.gov/nwis/iv/?sites=10351650&format=json"); 
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

