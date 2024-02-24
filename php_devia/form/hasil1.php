<?php
    $a=$_POST['nama'];
    $b=$_POST['jenis_kelamin'];
    $c=$_POST['tanggal_lahir'];
    $d=$_POST['KO'];
    $e=$_POST['PK'];
    $f=$_POST['KF'];
    $g=$_POST['pembayaran'];
    $diskon= 0;

    if($d =="Sepak Bola") {
        $harga = 0;
        if ($e =="Pemula") {
            $harga += 200000;
        } elseif ($e =="Menengah") {
            $harga += 250000;
        } elseif ($e =="Lanjutan") {
            $harga += 300000;
        }
    } elseif ($d == "Bulu Tangkis") {
        $harga = 0;
        if ($e == "Pemula") {
            $harga += 150000;
            if ($b =="wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($e =="Menengah") {
            $harga += 200000;
            if ($b == "Wanita") {
                 $diskon += $harga * 0.1;
            }
        } elseif ($e =="Lanjutan") {
            $harga += 250000;
            if ($b =="Wanita") {
                 $diskon += $harga * 0.1;
            }
        }              
    } elseif ($d =="Berenang") {
        $harga = 0;
        if ($e =="Pemula") {
            $harga += 180000;
        } elseif ($e =="Menengah") {
            $harga += 220000;
        } elseif ($e == "Lanjutan") {
            $harga += 270000;
        }
    }


    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat Anda Mendapat Hadiah";
    } else {
        $keputusan = "Sangat disayangkan anda tidak mendapatkan tambahan merchardise gratis ";
    }
    
    echo "<center>";
    echo "<h2>Formulir Pendaftaran</h2>";
    echo "Nama  = $a <br>";
    echo "Jenis Kelamin  = $b <br>";
    echo "Tanggal Lahir  = $c <br>";
    echo "Kategori Pilihan = $d<br>";
    echo "Pilihan Kelas = $e<br>";
    echo "Kemampuan Fisik =$f<br>";
    echo "Pembayaran =$g<br>";
    echo "Harga = RP. $harga<br>";
    echo "Diskon = RP. $diskon<br>";
    echo "total harga= RP. $total<br>";
    echo "<br>";
    echo $keputusan;
    echo "</center>"


    ?>
