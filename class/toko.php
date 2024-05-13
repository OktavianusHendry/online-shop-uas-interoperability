<?php
class Toko{
    //tambah koneksi db
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = "onlineshop";
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
        $deskripsi = $produk['deskripsi'];
        $gambar = $produk['gambar']; // Add this line
        $sqlQuery = "
            INSERT INTO ".$this->tblProduk." 
            SET nama='".$nama."', brand='".$brand."', deskripsi='".$deskripsi."', harga='".$harga."', gambar='".$gambar."'"; // Modify this line
    
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
    function createXMLfile($nilaArray){
        $filePath = 'produk.xml';
        $dom     = new DOMDocument('1.0', 'utf-8');
        $root      = $dom->createElement('onlineGameShop');
        for($i=0; $i<count($nilaArray); $i++){
            $id        =  $nilaArray[$i]['id'];
            $nama = htmlspecialchars($nilaArray[$i]['nama']);
            $matakuliah    =  $nilaArray[$i]['brand'];
            $nilai    =  $nilaArray[$i]['deskripsi'];
            $harga = $nilaArray[$i]['harga'];
            $gambar = $nilaArray[$i]['gambar']; 
            $score = $dom->createElement('produk');
            $score->setAttribute('id', $id);
           
            $nama     = $dom->createElement('nama', $nama);
            $score->appendChild($nama);
            $matakuliah     = $dom->createElement('brand', $matakuliah);
            $score->appendChild($matakuliah);
            $nilai     = $dom->createElement('deskripsi', $nilai);
            $score->appendChild($nilai);
            $harga = $dom->createElement('harga', $harga);
            $score->appendChild($harga);
            $gambar = $dom->createElement('gambar', $gambar);
            $score->appendChild($gambar);

           
            $root->appendChild($score);
        }
        $dom->appendChild($root);
        $dom->save($filePath);
    }
    public function getXml() {
       
        $sqlQuery = "select * from produk";

        $result = mysqli_query($this->dbConnect, $sqlQuery);
       
        //var_dump($result);
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