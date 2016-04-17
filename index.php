<?php

//load WaterData class	
require_once('classes/WaterData.php');

//create WaterData Object
$waterData = new WaterData;

//get weather for truckee
$truckeeWeather = $waterData->getWeather('Truckee', 'CA');

//get weather for reno
$renoWeather = $waterData->getWeather('Reno', 'NV');

//get weather for sparks
$sparksWeather = $waterData->getWeather('Sparks', 'NV');

//get weather for pyramid
$pyramidWeather = $waterData->getWeather('Sutcliffe', 'NV');

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
				print('<span class="flowrate">' . $fanny . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Truckee</h2>
			<?php
				$truckee = $waterData->getWaterData("10338000"); 
				print('<span class="flowrate">' . $truckee . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->
		<div class="col-md-4">
			<h2>Boca Bridge</h2>
			<?php
				$boca = $waterData->getWaterData("10344505"); 
				print('<span class="flowrate">' . $boca . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>LT abv Boca</h2>
			<?php
				$ltabvboca = $waterData->getWaterData("10344400"); 
				print('<span class="flowrate">' . $ltabvboca . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>LT Boca Dam</h2>
			<?php
				$ltbocadam = $waterData->getWaterData("10344500"); 
				print('<span class="flowrate">' . $ltbocadam . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Farad</h2>
			<?php
				$farad = $waterData->getWaterData("10346000"); 
				print('<span class="flowrate">' . $farad . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->		
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Reno</h2>
			<?php
				$reno = $waterData->getWaterData("10348000"); 
				print('<span class="flowrate">' . $reno . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Glendale Ave</h2>
			<?php
				$glendale = $waterData->getWaterData("10348036"); 
				print('<span class="flowrate">' . $glendale . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->		
		<div class="col-md-4">
			<h2>Vista Ave</h2>
			<?php
				$vista = $waterData->getWaterData("10350000"); 
				print('<span class="flowrate">' . $vista . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->	
	</div><!--end row-->
	<div class="row">
		<div class="col-md-4">
			<h2>Tracy</h2>
			<?php
				$tracy = $waterData->getWaterData("10350340"); 
				print('<span class="flowrate">' . $tracy . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Derby Dam</h2>
			<?php
				$derby = $waterData->getWaterData("10351600"); 
				print('<span class="flowrate">' . $derby . '</span> <span class="units">cfs</span>');
			?>
			<hr>
		</div><!-- .station -->	
		<div class="col-md-4">
			<h2>Wadsworth</h2>
			<?php
				$wadsworth = $waterData->getWaterData("10351650"); 
				print('<span class="flowrate">' . $wadsworth . '</span> <span class="units">cfs</span>');
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

    <div class="row">
    	<div class="col-md-3 weathergrid">
		    <div class="weather">
		    	<h2 class="city">Truckee</h2>
		  		<span class="temp"><?php print($truckeeWeather["temperature"]);?>&deg;</span>
		  		<p class="wind">Wind: <?php print($truckeeWeather["wind"]);?></p>
		    </div>
		</div>
    	<div class="col-md-3 weathergrid">
		    <div class="weather">
		    	<h2 class="city">Reno</h2>
		    	<span class="temp"><?php print($renoWeather["temperature"]);?>&deg;</span>
		    	<p class="wind">Wind: <?php print($renoWeather["wind"]);?></p>
		    </div>
		</div>
    	<div class="col-md-3 weathergrid">
		    <div class="weather">
		    	<h2 class="city">Sparks</h2>
		    	<span class="temp"><?php print($sparksWeather["temperature"]);?>&deg;</span>
		    	<p class="wind">Wind: <?php print($sparksWeather["wind"]);?></p>
		    </div>
		</div>
    	<div class="col-md-3 weathergrid">
		    <div class="weather">
		    	<h2 class="city">Pyramid</h2>
		    	<span class="temp"><?php print($pyramidWeather["temperature"]);?>&deg;</span>
		    	<p class="wind">Wind: <?php print($pyramidWeather["wind"]);?></p>
		    </div>
		</div>
	</div><!--end row-->


    <div class="logo">
      <img src="images/logo.png" width="80%" align="right">
    </div>
  </div><!--end col-md-6-->
</div><!--end row-->

<?php require_once('footer.php'); ?>

