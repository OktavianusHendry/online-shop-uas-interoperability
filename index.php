<?php include ('inc/header.php'); ?>
       <!-- Carousel Banner Starts -->
       <header id="slideCarousel">
         <div class="slide-image2" id="slide1">
         </div>
         <div class="slide-image2" id="slide2">
         </div>
         <div class="slide-image2" id="slide3">
         </div>
       </header>
       <!-- Carousel Banner Ends -->
      <section class="produk-kami" id="produk">
        <h1>Produk Kami</h1>
        <!-- T-Shirt Start -->
        <div class="container">
          <div class="card">
            <img src="images/produk1.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese T-Shirt</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk3.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Blue Premium Japanese T-Shirt</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="3">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk4.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Koi Premium Japanese T-Shirt</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="4">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk5.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Oni Premium Japanese T-Shirt</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="5">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk1.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese T-Shirt</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>
        </div>
        <!-- T-Shirts End -->
        <!-- Bags starts -->
        <div class="container">
          <div class="card">
            <img src="images/produk2.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese Drawstring Bag</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk2.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese Drawstring Bag</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk2.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese Drawstring Bag</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk2.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese Drawstring Bag</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk2.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Yab! Black Premium Japanese Drawstring Bag</h4>
              <h5>Rp 100.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="2">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>
        </div>
        <!-- Bags Ends -->
     </section>
<?php include ('inc/footer.php'); ?>


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

       <script type="text/javascript">
       var currentDropdown = null;

       function dropdownFunction(dropdownId) {
         var dropdown = document.getElementById(dropdownId);
         if (currentDropdown && currentDropdown != dropdown) {
           currentDropdown.classList.remove("show");
         }
         dropdown.classList.toggle("show");
         currentDropdown = dropdown;
       }

       // Close the dropdown if the user clicks outside of it
       window.onclick = function(e) {
         if (!e.target.matches('.dropbtn')) {
           var dropdowns = document.getElementsByClassName("dropdown-content");
           for (var i = 0; i < dropdowns.length; i++) {
             var dropdown = dropdowns[i];
             if (dropdown.classList.contains('show')) {
               dropdown.classList.remove('show');
               currentDropdown = null;
             }
           }
         }
       }

          </script>
  </body>
</html>
