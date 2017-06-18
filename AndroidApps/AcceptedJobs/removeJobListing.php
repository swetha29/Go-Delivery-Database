<?php

$remove = $_POST["removeJobListing"];

$lines = file("AcceptedJobsList.txt", FILE_IGNORE_NEW_LINES);

foreach($lines as $key => $line)
  if(stristr($line, $remove)) unset($lines[$key]);

$data = implode("\n", array_values($lines));




$registeredUsernamesFile = fopen("AcceptedJobsList.txt", "w") or die("Unable to open file!");


fwrite($registeredUsernamesFile, $data);
fwrite($registeredUsernamesFile, "\n");

fclose($registeredUsernamesFile);


 ?>