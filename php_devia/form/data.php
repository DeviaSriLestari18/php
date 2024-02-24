<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h2>Data Nilai Ujian Kelas XI RPL 2</h2>  
     <form method= "POST" action= "">
        <table>
        <tr>
            <td>Jumlah Siswa</td>
            <td>:</td>
            <td><input type='number' name='siswa'></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value='Proses'></td>
        </tr> 
        </table> 
     </form> 
</center>    
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $jumlah = $_POST ['siswa'];

    for ($i=1 ; $i <= $jumlah ; $i ++) {
        echo "
        <form>
            <center>
               <table>
                  <tr>
                       <td></td>
                       <td></td>
                       <td>Data Siswa Ke $i</td>
                  </tr>
                  <tr>
                       <td>NIS</td>
                       <td>:</td>
                       <td><input type=text></td>
                  </tr>
                  <tr>
                       <td>Nama</td>
                       <td>:</td>
                       <td><input type=text></td>
                  </tr>
                  <tr>
                       <td>Kelas</td>
                       <td>:</td>
                       <td><input type=text></td>
                  </tr>
                  <tr>
                       <td>Bahasa Indonesia</td>
                       <td>:</td>
                       <td><input type=number></td>
                  </tr>
                  <tr>
                       <td>Bahasa Inggris</td>
                       <td>:</td>
                       <td><input type=number></td>
                  </tr>
                  <tr>
                       <td>Matematika</td>
                       <td>:</td>
                       <td><input type=number></td>
                  </tr>
                  <tr>
                       <td>Produktif</td>
                       <td>:</td>
                       <td><input type=number></td>
                  </tr>

        ";
    };
};
?>

<tr>
     <td></td>
     <td></td>
     <td><input type="submit" name="simpan" value="SIMPAN">
     </td>
</tr>     