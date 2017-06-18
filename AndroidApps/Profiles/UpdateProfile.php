<?php

$name = $_POST["GoDeliveryName"];
$email = $_POST["GoDeliveryEmail"];
$phone = $_POST["GoDeliveryPhone"];

$registeredUserProfile = fopen($email . ".txt", "w") or die("Unable to open file!");
fwrite($registeredUserProfile , $name . "|" . $phone);
fclose($registeredUserProfile);

 ?>