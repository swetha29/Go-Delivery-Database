<?php

$AcceptedJob = $_POST["AcceptedJob"];
$AcceptedJobDetails = $_POST["AcceptedJobDetails"];
$JobFileName = $_POST["JobFileName"];


$AcceptedJobsFile = fopen("AcceptedJobsList.txt", "a") or die("Unable to open file!");


fwrite($AcceptedJobsFile, $AcceptedJob);
fwrite($AcceptedJobsFile, "\n");

fclose($AcceptedJobsFile);



$AcceptedJobsFileCreater = fopen($JobFileName, "w") or die("Unable to open file!");


fwrite($AcceptedJobsFileCreater, $AcceptedJobDetails);
fwrite($AcceptedJobsFileCreater, "\n");

fclose($AcceptedJobsFileCreater);

 ?>