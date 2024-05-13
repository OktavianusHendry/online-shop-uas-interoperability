<?php

$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/toko.php');
$api = new Toko();
$xml = $api->getXml();
echo $xml;
header('Location: produk.xml');
?>
