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
        while($produkRecord = mysqli_fetch_array($result)){
            $produkData[] = $produkRecord;
        }
        header('Content-Type:application/json');
        echo json_encode($produkData);
    }


}
?>