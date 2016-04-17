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

	public function getWeather($city, $state)
	{
		$json_string = file_get_contents('http://api.wunderground.com/api/c10368588634bac5/geolookup/conditions/q/'.$state.'/'.$city.'.json');
		$parsed_json = json_decode($json_string);
		$temperature = $parsed_json->{'current_observation'}->{'temp_f'};
		$wind = $parsed_json->{'current_observation'}->{'wind_string'};
		$summary = $parsed_json->{'current_observation'}->{'weather'};
		$icon = 'http://icons.wxug.com/i/c/j/'.$parsed_json->{'current_observation'}->{'icon'}.'.gif';
		$weather = array(
			'temperature'	=>	$temperature,
			'wind'			=>	$wind,
			'summary'		=>	$summary,
			'icon'			=>	$icon
		);

		return $weather;
	}
}