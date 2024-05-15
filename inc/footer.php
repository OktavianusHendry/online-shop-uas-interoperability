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
<footer>
  <div class="container">
    <div class="footer-content">
      <h4>Bantuan</h4>
      <ul>
        <li><a href="cara_pemesanan.php">Cara Pemesanan</a></li>
        <li><a href="syarat_ketentuan.php">Syarat & Ketentuan</a></li>
        <li><a href="pengembalian.php">Pengembalian Barang</a></li>
      </ul>
    </div>
    <div class="footer-content">
     
      <br>
      <h4>Anggota Kelompok:</h4>
    <ul>
        <li>Oktavianus Hendry Wijaya</li>
        <li>Paris Matio</li>
        <li>Yogi Valentino Nadeak</li>
    </ul>
    </div>
    <div class="footer-content">
      <a href="index.html"><img src="../images/logo.svg" class="nav-logo" alt="YAB!" width="80px"></a>
      <p>Jl. Gading Serpong Boulevard No.1, Curug Sangereng, Kelapa Dua, Tangerang, Banten, Indonesia.</p>
      <p>Find the fun & cool gaming needs<br>
        <b>Only at YGS! - Fun & Easy</b>
      </p>
    </div>
  </div>
</footer>
<hr>
<div class="copyright">
  <h5>Copyright © 2024, YGS!</h5>
</div>
