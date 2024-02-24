<?php
//buat clas
class manusia {

    // buat property/atribut
    public $nama = "devia";
    public $nama2 = "silvia";
    public $jenis_kelamin;

    //buat method/function
    public function makan(){
        echo "$this->nama suka makan ayam";
    }
    public function minum(){
        echo "$this->nama2 devia suka minum jus";
    }
}

//buat object
$cetak = new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>