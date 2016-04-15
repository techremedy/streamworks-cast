<?php

class WaterData{

	//function to get water data for given site
	public function getWaterData($site)
	{
		if($site == 'time'){
          $string = file_get_contents('http://waterservices.usgs.gov/nwis/iv/?sites=10348000&format=json');
		  $json = json_decode($string, true);
		  $siteName = ($json["value"]["timeSeries"][0]["sourceInfo"]["siteName"]);
		  $currentFlowRate = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		
		  if($currentFlowRate <= 0)
		  {
			$currentFlowRate = "Data Error";
		  }

		  $machineDateTime = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["dateTime"]);
		  $dt = DateTime::createFromFormat('Y-m-d\TH:i:s+', $machineDateTime);
		  $humanDate = $dt->format("M d, Y");
		  $humanTime = $dt->format("g:i A");
		  $time = array($humanDate, $humanTime);
		  return $time;
		}

		$site = 'http://waterservices.usgs.gov/nwis/iv/?sites='.$site.'&format=json';
		$string = file_get_contents($site);
		$json = json_decode($string, true);
		$siteName = ($json["value"]["timeSeries"][0]["sourceInfo"]["siteName"]);
		$currentFlowRate = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["value"]);
		
		if($currentFlowRate <= 0)
		{
			$currentFlowRate = "Data Error";
		}

		$machineDateTime = ($json["value"]["timeSeries"][0]["values"][0]["value"][0]["dateTime"]);
		$dt = DateTime::createFromFormat('Y-m-d\TH:i:s+', $machineDateTime);
		$humanDate = $dt->format("M d, Y");
		$humanTime = $dt->format("g:i A");

		if($currentFlowRate != "Data Error")
		{
			$printOut = $currentFlowRate;
		}
		else
		{
			$printOut = 'Data Error';
		}
		return $printOut;
	}
}