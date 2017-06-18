<?php

$AcceptedJobStatus = $_POST["JobStatus"];
$JobStatusFileName = $_POST["JobFileName"];



$AcceptedJobStatusFileCreater = fopen($JobStatusFileName, "w") or die("Unable to open file!");


fwrite($AcceptedJobStatusFileCreater, $AcceptedJobStatus);
fwrite($AcceptedJobStatusFileCreater, "\n");

fclose($AcceptedJobStatusFileCreater);

 ?>