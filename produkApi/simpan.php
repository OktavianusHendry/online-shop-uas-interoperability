<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/toko.php');
$api = new Toko();
switch($requestMethod){
    case 'POST':
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
        
        $_POST['gambar'] = $target_file;
        
        $api->tambahProduk($_POST);
        header('Location: ../index.php');
        exit(); 
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>
