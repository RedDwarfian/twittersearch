<?php
ini_set('memory_limit', '-1');
$array = json_decode(file_get_contents("./data/uscitiespop.json"), true);
$newarray = [];
foreach($array as $city) {
	$newarray[] = [
		"city"=>$city['AccentCity'].", ".$city['Region'],
		"latitude"=>substr($city['Latitude'],0,13), // Because rounding produced 40+ digit numbers
		"longitude"=>substr($city['Longitude'],0,13)
	];
}

file_put_contents("./data/uscities.json", json_encode($newarray));
?>