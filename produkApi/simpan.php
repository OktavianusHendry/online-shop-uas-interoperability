<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('../class/toko.php');
$api = new Toko();
switch($requestMethod){
    case 'POST':
        // Handle the uploaded file
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
        
        // Add the file name to the $_POST array
        $_POST['gambar'] = $target_file;
        
        $api->tambahProduk($_POST);
        header('Location: ../displayData.php');
        exit(); // Ensure that no other output is sent
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
?>
