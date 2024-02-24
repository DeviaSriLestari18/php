<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h2> DAFTAR SMK </h2>
    <form method= "POST" action= "">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Tangga Lahir</td>
                <td>:</td>
                <td><input type='date' name='tgl'></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type='radio' name='JK' value= 'Laki-Laki'> Laki-Laki
                    <input type='radio' name='JK' value= 'Perempuan'> Perempuan
            </td>
            </tr>
            <tr>
                <td>Biaya Register</td>
                <td>:</td>
                <td><input type='number' name='biaya'></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                     <select name="jurusan">
                            <option value="">Pilih</option>
                            <option value="RPL">RPL</optin>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                     </select>       
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='DAFTAR'></td>
            </tr>  
        </table>
</center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {

    $a=$_POST['nama'];
    $b=$_POST['tgl'];
    $c=$_POST['JK'];
    $d=$_POST['biaya'];
    $e=$_POST['jurusan'];
    $harga=0;

    if ($e == "RPL" ) {
        $harga  += 2500000;
    } elseif ($e == "TKRO") {
        $harga += 3000000;
    } elseif ($e == "TBSM") {
        $harga += 3500000;
    } else {
        echo "Pilih Jurusan Anda";
    }
    $total = $harga + $d;
    
    echo "STRUK REGISTER <br>";
    echo "Nama =$a <br>";
    echo "Tanggal Lahir =$b <br>";
    echo "Jenis Kelamin =$c <br>";
    echo "Biaya Register =$d <br>";
    echo "Jurusan =$e <br>";
    echo "Biaya Jurusan = $harga <br>";
    echo "Total Pemabayaran = $total <br>";

}
?>