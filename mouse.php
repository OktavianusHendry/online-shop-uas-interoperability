<?php include ('inc/header.php'); ?>
<section class="produk-kami" id="produk">
<link rel="stylesheet" href="../style/style.css">
<h1>Mouse</h1>
<div class="container">
    <!--    Baju Baris Kedua   -->
          <div class="card">
            <img src="images/produk1.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Logitech G-Pro Wireless</h4>
              <h5>Rp 1.000.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk3.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Lamzu Atlantis OG V2 Pro Wireless</h4>
              <h5>Rp 1.500.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="3">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk4.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Logitech G102</h4>
              <h5>Rp 300.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="4">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk5.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Steelseries Rival 300</h4>
              <h5>Rp 1.200.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="5">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>

          <div class="card">
            <img src="images/produk1.png" alt="barang" style="width:100%">
            <div class="card-content">
              <h4>Razer Death Adder V2</h4>
              <h5>Rp 1.320.000</h5>
              <form method="POST" action="add_to_cart.php">
                <input type="hidden" name="product_id" value="1">
                <button type="submit" id="submit"><i class=" fa fa-cart-plus" style="color: #fcfcfc"></i>&nbsp; Beli</button>
              </form>
            </div>
          </div>
        </div>
        </section>

        <?php include ('inc/footer.php'); ?>
