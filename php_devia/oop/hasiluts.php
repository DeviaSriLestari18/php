<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    
</body>
</html>

<?php

if(isset($_POST['proses'])) {

    $no= $_POST['no'];
    $nama= $_POST ['nama'];
    $unit_pendidikan =$_POST ['unit_pendidikan'];
    $tanggal_gaji=$_POST ['tgl_gaji'];
    $jabatan =$_POST['jabatan'];
    $gaji;
    $lama_kerja=$_POST['lama_kerja'];
    $status_kerja=$_POST['SK'];
    $bonus;
    $bpjs=$_POST['bpjs'];
    $pinjaman=$_POST['pinjaman'];
    $tabungan=$_POST['tabungan'];
    $lainnya=$_POST['lainnya'];
    $gaji_bersih;


    if($jabatan== "Kepala Sekolah"){
        $gaji = 5000000;
    } elseif ($jabatan== "Wakasek"){
        $gaji = 4000000;
    } elseif ($jabatan =="Guru"){
        $gaji = 3000000;
    } elseif ($jabatan =="Karyawan"){
        $gaji = 2000000;
    } else {
        echo "Pilih Jabatan Anda";

    } if($status_kerja=="Tetap") {
        $bonus = 1000000;
    } elseif ($status_kerja=="Kontrak"){
        $bonus = 0;
    } else {
        echo "Pilih Status Kerja Anda";
    }

    $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

    class hasil {

        public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gaji_bersih2){

          ?>

          </div>
          <center>
      <div class="card text-white bg-info mt-5 mb-3" style="max-width: 30rem;">
        <div class="card-header"><h3>STRUK GAJI</h3></div>
        <div class="card-body">
          <h5 class="card-title">Berhasil!!</h5>
          <table>
            <tr>
              <td>No</td>
              <td>:</td>
              <td><?php echo $no2 ?></td>
            </tr>  
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><?php echo $nama2 ?></td>
            </tr>
            <tr>
              <td>Unit Pendidikan</td>
              <td>:</td>
              <td><?php echo $unit_pendidikan2 ?></td>
            </tr>
            <tr>
              <td>Tanggal Gaji</td>
              <td>:</td>
              <td><?php echo $tanggal_gaji2 ?></td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td>:</td>
              <td><?php echo $jabatan2 ?></td>
            </tr>
            <tr>
              <td>Gaji</td>
              <td>:</td>
              <td><?php echo $gaji2 ?></td>
            </tr>
            <tr>
              <td>Lama Kerja</td>
              <td>:</td>
              <td><?php echo $lama_kerja2 ?></td>
            </tr>
            <tr>
              <td>Status Kerja</td>
              <td>:</td>
              <td><?php echo $status_kerja2 ?></td>
            </tr>
            <tr>
              <td>Bonus</td>
              <td>:</td>
              <td><?php echo $bonus2 ?></td>
            </tr>
            <tr>
              <td>BPJS</td>
              <td>:</td>
              <td><?php echo $bpjs2 ?></td>
            </tr>
            <tr>
              <td>Pinjaman</td>
              <td>:</td>
              <td><?php echo $pinjaman2 ?></td>
            </tr>
            <tr>
              <td>Tabungan</td>
              <td>:</td>
              <td><?php echo $tabungan2 ?></td>
            </tr>
            <tr>
              <td>Lainnya</td>
              <td>:</td>
              <td><?php echo $lainnya2 ?></td>
            </tr>
            <tr>
              <td>Gaji Bersih</td>
              <td>:</td>
              <td><?php echo $gaji_bersih2 ?></td>
            </tr>
        </div>
        </center>
      </div>

      <?php
      
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
}
?>
