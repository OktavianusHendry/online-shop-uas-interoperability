<?php
header("Access-Control-Allow-Origin: *");
include('inc/header.php');
include('inc/nav.php');
include('class/toko.php');

?>

<div class="container">
    <h1>Tampilkan Produk </h1>
    <?php

    // $url = 'http://mahasiswa/nilai/getdata.php?id=1';
    $url = 'http://uas/produkApi/getdata.php';
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);
    // print_r($result);
    echo "<table border=1>";
    echo "<tr><th>Nama Produk</th><th>Deskripsi</th><th>Harga</th><th>Edit</th><th>Hapus</th></tr>";
    foreach ($result as $item) {
        echo "<tr>";
        echo "<td>".$item->nama."</td>";
        echo "<td>".$item->deskripsi."</td>";
        echo "<td>".$item->harga."</td>";
        echo "<td><a href='editjadwal.php?id=".$item->id."'>Edit</a></td>";
        echo "<td><a href='deletejadwal.php?id=".$item->id."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>

<?php include('inc/footer.php'); ?>
