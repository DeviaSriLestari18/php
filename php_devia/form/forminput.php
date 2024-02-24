<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
<h2>Form Biodata Diri</h2>
        <!-- form  -->
        <form method = "POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>  
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal_lahir'></td>
                </tr>  
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='JK' value= 'Laki-Laki'> Laki-Laki
                        <input type='radio' name='JK' value= 'Perempuan'> Perempuan
                </td>
                </tr> 
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" cols="20" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>    
                    </td>
                </tr> 
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td> <select name="pendidikan_terakhir">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr> 

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type='text' name='status'></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type='text' name='hobi'></td>
                </tr>
                <tr>
                    <td>Cita cita</td>
                    <td>:</td>
                    <td><input type='text' name='cita_cita'></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
            </table>    
        </form>    
    </center>    
</body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $nama =$_POST['nama'];
    $tanggal=$_POST['tanggal_lahir'];
    $JK=$_POST['JK'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];
    $pendidikan=$_POST['pendidikan_terakhir'];
    $status=$_POST['status'];
    $hobi=$_POST['hobi'];
    $cita=$_POST['cita_cita'];

    echo "============================== Biodata Diri ======================================<br>";
    echo "==================================================================================<br>";
    echo "Nama  = $nama <br>";
    echo "Tanggal Lahir  = $tanggal <br>";
    echo "Jenis Kelamin  = $JK <br>";
    echo "Alamat  = $alamat <br>";
    echo "Agama = $agama <br>";
    echo "Pendidikan Terakhir = $pendidikan <br>";
    echo "Status  = $status <br>";
    echo "Hobi = $hobi <br>";
    echo "Cita Cita = $cita <br>";
}
?>