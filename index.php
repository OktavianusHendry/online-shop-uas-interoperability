<?php
    header("Access-Control-Allow-Origin: *");
    include('inc/header.php');
    include('class/toko.php');
?>

<header id="slideCarousel">
    <div class="slide-image2" id="slide1">
    </div>
    <div class="slide-image2" id="slide2">
    </div>
    <div class="slide-image2" id="slide3">
    </div>
</header>
<section class="produk-kami" id="produk">
    <h1>Produk Kami</h1>

    <?php
        $url = 'https://kelompok1.doseninformatika.com/produkApi/getdata.php';
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        $result = json_decode($response);

        echo "<div class='container' id='produk'>";
        $count = 0;
        foreach ($result as $item) {
            if($count % 5 == 0 && $count > 0) {
                echo "</div><div class='container'>";
            }
            echo "<div class='card'>";
            echo "<img src='produkApi/".$item->gambar."' alt='barang' style='width:100%'>";
            echo "<div class='card-content'>";
            echo "<h4>".$item->brand." - ".$item->nama."</h4>";
            echo "<h5>Rp ".number_format($item->harga, 0, ',', '.')."</h5>";
            echo "<h5>Seller: ".$item->seller."</h5>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='product_id' value='".$item->id."'>";
            echo "<button type='submit' id='submit'><i class='fa fa-cart-plus' style='color: #fcfcfc'></i>  Beli</button>";
            echo "<button type='button' onclick='alert(\"".$item->deskripsi."\")'>Detail Produk</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            $count++;
        }
        echo "</div>";

    ?>


    <h1>Produk Kelompok 2 menggunakan XML</h1>
    <?php
    $xml_data = simplexml_load_file('https://kelompok2.doseninformatika.com/nilai/produk.xml') or die("Error: Object Creation failure"); 
    $count = 0;

    echo "<div class='container' id='produk'>";
    foreach ($xml_data->children() as $data)
    {
        if($count % 5 == 0 && $count > 0) {
            echo "</div><div class='container'>";
        }
        echo "<div class='card'>";
        echo "<img src='https://kelompok2.doseninformatika.com/".$data->gambar."' alt='barang' style='width:100%'>";
        echo "<div class='card-content'>";
        echo "<h4>".$data->nama."</h4>";
        echo "<h5>Rp ".number_format((int)$data->harga, 0, ',', '.')."</h5>";
        echo "<p>".$data->deskripsi."</p>";
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='product_id' value='".$data->id."'>";
        echo "<button type='submit' id='submit'><i class='fa fa-cart-plus' style='color: #fcfcfc'></i>  Beli</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
        $count++;
    }
    echo "</div>";
    ?>
    <h1>XML Kelompok 2</h1>
    <?php
        $xml_url = 'https://kelompok2.doseninformatika.com/nilai/produk.xml';
        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = false;
        $dom->load($xml_url);
        $dom->formatOutput = true;
        $xml_content = $dom->saveXML();
        echo "<pre><code>";
        echo htmlspecialchars($xml_content);
        echo "</code></pre>";
    ?>


    


</section>

<?php include('inc/footer.php'); ?>
<script type="text/javascript">
       $(document).ready(function(){
        var interval = window.setInterval(rotateSlides, 5000)

        function rotateSlides(){
          var $firstSlide = $('#slideCarousel').find('div:first');
          var width = $firstSlide.width();

          $firstSlide.animate({marginLeft: -width}, 3000, function(){
            var $lastSlide = $('#slideCarousel').find('div:last')
            $lastSlide.after($firstSlide);
            $firstSlide.css({marginLeft: 0})
          })
        }

      })
</script>