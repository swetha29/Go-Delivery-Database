<?php

$PaymentStatus = $_POST["PaymentStatus"];
$PaymentStatusFileName = $_POST["JobFileName"];



$PaymentStatusFileCreater = fopen($PaymentStatusFileName, "w") or die("Unable to open file!");


fwrite($PaymentStatusFileCreater, $PaymentStatus);
fwrite($PaymentStatusFileCreater, "\n");

fclose($PaymentStatusFileCreater);

 ?>