<?php

$Latitude = $_POST["Latitude"];
$Longitude = $_POST["Longitude"];
$JobFileName = $_POST["JobFileName"];

if (($Latitude != "null") && ($Longitude != "null"))
{

$LocationUpdates = fopen($JobFileName, "a") or die("Unable to open file!");


fwrite($LocationUpdates, $Latitude);
fwrite($LocationUpdates, "\n");
fwrite($LocationUpdates, $Longitude);
fwrite($LocationUpdates, "\n");
fwrite($LocationUpdates, "***");
fwrite($LocationUpdates, "\n");

fclose($LocationUpdates);

}


 ?>