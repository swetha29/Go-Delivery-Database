<?php

$username = $_POST["username"];

$registeredUsernamesFile = fopen("JobsListings.txt", "a") or die("Unable to open file!");


fwrite($registeredUsernamesFile, $username);
fwrite($registeredUsernamesFile, "\n");

fclose($registeredUsernamesFile);

 ?>