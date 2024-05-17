<?php
class Toko{
    private $host = 'localhost';
    private $user = 'dosa9773';
    private $pass = 'wzg62paZxZ2eHzVX';
    private $database = "dosa9773_kelompok1";
    private $tblProduk = 'produk';
    private $dbConnect = false;

    public function __construct(){
        if(!$this->dbConnect){
            $conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }

    public function getData($id){
        if($id){
            $sqlQuery = "SELECT * FROM produk WHERE id = " . $id;
        } else{
            $sqlQuery = "SELECT * FROM produk";
        }

        $result = mysqli_query($this->dbConnect, $sqlQuery);

        if(!$result){
            die('Error in query: '. mysqli_error());
        }
        $produkData = array();
        while($produkRecord = mysqli_fetch_assoc($result)){
            $produkData[] = $produkRecord;
        }
        header('Content-Type:application/json');
        echo json_encode($produkData);
    }
    public function tambahProduk($produk){
        $nama = $produk['nama'];
        $harga = $produk['harga'];
        $brand = $produk['brand'];
        $seller = $produk['seller'];
        $gambar = $produk['gambar']; 
        $sqlQuery = "
            INSERT INTO ".$this->tblProduk." 
            SET nama='".$nama."', brand='".$brand."', seller='".$seller."', harga='".$harga."', gambar='".$gambar."'"; 
    
        if(mysqli_query($this->dbConnect, $sqlQuery)){
            $pesan = "Produk berhasil ditambahkan.";
            $status = 1;
        } else{
            $pesan = "Gagal menambahkan produk.";
            $status = 0;
        }
        $produkResponse = array(
            'status' => $status,
            'status_pesan' => $pesan
        );
        header('Content-Type:application/json');
        echo json_encode($produkResponse);
    }
    function createXMLfile($produkArray){
        $filePath = 'produk.xml';
        $dom     = new DOMDocument('1.0', 'utf-8');
        $root      = $dom->createElement('onlineGameShop');
        for($i=0; $i<count($produkArray); $i++){
            $id        =  $produkArray[$i]['id'];
            $nama = htmlspecialchars($produkArray[$i]['nama']);
            $brand    =  $produkArray[$i]['brand'];
            $seller    =  $produkArray[$i]['seller'];
            $harga = $produkArray[$i]['harga'];
            $gambar = $produkArray[$i]['gambar']; 
            $produk = $dom->createElement('produk');
            $produk->setAttribute('id', $id);
           
            $nama     = $dom->createElement('nama', $nama);
            $produk->appendChild($nama);
            $brand     = $dom->createElement('brand', $brand);
            $produk->appendChild($brand);
            $seller     = $dom->createElement('seller', $seller);
            $produk->appendChild($seller);
            $harga = $dom->createElement('harga', $harga);
            $produk->appendChild($harga);
            $gambar = $dom->createElement('gambar', $gambar);
            $produk->appendChild($gambar);

           
            $root->appendChild($produk);
        }
        $dom->appendChild($root);
        $dom->save($filePath);
    }
    public function getXml() {
       
        $sqlQuery = "select * from produk";

        $result = mysqli_query($this->dbConnect, $sqlQuery);
       
        if(!$result){
            die('Error in query: '. mysqli_error());
        }
        $nialiArray = array();

        while( $result_array  = mysqli_fetch_assoc($result) ) {
             array_push($nialiArray, $result_array);
        }
            if(count($nialiArray)){
                $this->createXMLfile($nialiArray);
            }
        /* free result set */
        $result->free();
       
    }
}
?>