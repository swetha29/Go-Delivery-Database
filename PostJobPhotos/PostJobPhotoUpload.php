<?php
error_reporting(E_ALL);
if(isset($_POST['GoDeliveryPostImageName'])){
$imgname = $_POST['GoDeliveryPostImageName'];
$imsrc = base64_decode($_POST['GoDeliveryPostbase64']);
$fp = fopen($imgname, 'w');
fwrite($fp, $imsrc);
if(fclose($fp)){
 echo "Image uploaded";
}else{
 echo "Error uploading image";
}
}
?>