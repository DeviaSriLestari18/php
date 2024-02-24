<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h2>Formulir Pendaftaran </h2>
        <!-- form  -->
    <form method= "POST" action= "hasil1.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                     <select name="jenis_kelamin">
                            <option value="">Pilih</option>
                            <option value="Pria">Pria</optin>
                            <option value="Wanita">Wanita</option>
                     </select>       
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type='date' name='tanggal_lahir'></td>
            </tr>
            <tr>
                <td>kategori Olahraga</td>
                <td>:</td>
                <td><input type='radio' name='KO' value= 'Sepak Bola'> Sepak Bola
                    <input type='radio' name='KO' value= 'Bulu Tangkis'> Bulu Tangkis
                    <input type='radio' name='KO' value= 'Renang'> Renang
            </td>
            </tr> 
            <tr>
                <td>Pilihan Kelas</td>
                <td>:</td>
                <td><input type="checkbox" name="PK" value="Pemula"> Pemula <br>
                    <input type="checkbox" name="PK" value="Menengah"> Menengah <br>
                    <input type="checkbox" name="PK" value="Lanjutan"> Lanjutan <br>
                </td>
            </tr>
            <tr>
                <td>Kemampuan Fisik</td>
                <td>:</td>
                <td><textarea name="KF" cols="25" rows="7"></textarea></td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td>:</td>
                <td>
                     <select name="pembayaran">
                            <option value="">pilih</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="Kartu Kredit">Kartu Kredit</option>
                     </select>       
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='KIRIM'></td>
            </tr>
        </table>
    </form>
<center>    
</body>
</html>
