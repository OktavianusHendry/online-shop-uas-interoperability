<?php
    header("Access-Control-Allow-Origin: *");
    include('inc/header.php');
    // include('inc/nav.php');
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
        // $url = 'http://mahasiswa/nilai/getdata.php?id=1';
        $url = 'http://uas/produkApi/getdata.php';
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
            echo "<img src='".$item->gambar."' alt='barang' style='width:100%'>";
            echo "<div class='card-content'>";
            echo "<h4>".$item->nama."</h4>";
            echo "<h5>Rp ".$item->harga."</h5>";
            echo "<form method='POST' action='add_to_cart.php'>";
            echo "<input type='hidden' name='product_id' value='".$item->id."'>";
            echo "<button type='submit' id='submit'><i class='fa fa-cart-plus' style='color: #fcfcfc'></i>  Beli</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            $count++;
        }
        echo "</div>";

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