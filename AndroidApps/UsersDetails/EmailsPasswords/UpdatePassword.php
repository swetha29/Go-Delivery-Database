<?php

$remove = $_POST["GoDeliveryEmail"];

$password = $_POST["GoDeliveryPassword"];

$lines = file("EmailsPasswordsList.txt", FILE_IGNORE_NEW_LINES);

foreach($lines as $key => $line)
  if(stristr($line, $remove)) unset($lines[$key]);

$data = implode("\n", array_values($lines));



$registeredUsernamesFile = fopen("EmailsPasswordsList.txt", "w") or die("Unable to open file!");
fwrite($registeredUsernamesFile, $data);
fwrite($registeredUsernamesFile, "\n");
fclose($registeredUsernamesFile);


$registrationFile = fopen("EmailsPasswordsList.txt", "a") or die("Unable to open file!");
fwrite($registrationFile, $remove . "|" . $password );
fwrite($registrationFile, "\n");
fclose($registrationFile);



 ?>