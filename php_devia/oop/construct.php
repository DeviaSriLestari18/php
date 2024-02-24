<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum <br>";
    }
    public function perkenalan(){
        echo "Nama saya Devia <br>";
    }
    public function __destruct(){
        echo "Hallo";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();