<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kelompok 1 Online Shop</title>
    <link rel="stylesheet" href="style/style.css">
    <link
            rel="shortcut icon"
            type="image/icon"
            href="../images/logo.svg"
        />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
      <nav id="navbar">
        <hr>
        <div class="navbar-container">
          <a href="index.php"><img src="images/logo.svg" class="nav-logo" alt="YAB!" width="60px"></a>
          <ul class="nav-main">
            <li class="nav-items home"><a href="index.php" id="home">Home</a></li>
            
            <li class="nav-items"><a href="addproduk.php">Tambah Produk</a></li>
            <!-- <li class="nav-items"><a href="displayData.php">Produk Kami</a></li> -->
            <li class="nav-items"><a href="produkApi/getxml.php">Dapatkan XML Produk</a></li>
            <!-- <li class="nav-items dropdown">
              <button type="button" class="dropbtn" onclick="dropdownFunction('myDropdown2')">Bantuan</button>
              <div class="dropdown-content" id="myDropdown2">
                <a href="cara_pemesanan.php">Cara Pemesanan</a>
                <a href="syarat_ketentuan.php">Syarat & Ketentuan</a>
                <a href="pengembalian.php">Pengembalian</a>
              </div>
            </li> -->
          </ul>
          <div class="nav-top-right">
            <a href="cart.php"><i class=" fa fa-shopping-cart" style="color: #4F4C4D; font-size:24px"></i></a>
            <a href="order_list.php"><i class=" fa fa-list" style="color: #4F4C4D; font-size:22px"></i></a>
            <a href="account.php"><i class=" fa fa-user" style="color: #4F4C4D; font-size:24px"></i></a>
          </div>
         </div>
       </nav>
