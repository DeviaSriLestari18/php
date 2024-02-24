<?php

class manusia {

    public $nama = "Devia";

    private function tampilkan_nama(){
        echo "Nama saya Devia <br/>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
// manggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;
