<?php

$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/toko.php');
$api = new Toko();
switch($requestMethod) {
    case 'GET':
        $id = '';
        $nama = '';
        $seller = '';
        $harga = '';
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $api->getData($id);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>