<?php
error_reporting(E_ALL);
if(isset($_POST['GoDeliveryPreImageName'])){
$imgname = $_POST['GoDeliveryPreImageName'];
$imsrc = base64_decode($_POST['GoDeliveryPrebase64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
 echo "Image uploaded";
}else{
 echo "Error uploading image";
}
}
?>