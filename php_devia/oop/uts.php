<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>latihan</title>
</head>
<body>
    <center>
         <img src="yayasan2.png" alt="..." width="250" height="300">
         <h5>PENGGAJIHAN</h5>
         <h5>GURU/KARYAWAN YAYASAN ASSALAAM</h5>
    </center>   
    <div class="card text white bg-info mt-5 ml-5 mr-5">
        <div class="card-header">
             DATA PENGGAJIHAN
        </div>
    <div class="card-body">
        <form method= "post" action="hasiluts.php">
            <div class="form-group">
                <label>No</label>
                <input type="text" class="form-control" name="no" placeholder="No">
            </div>
    <div class="form-group">
         <label>Nama</label>
         <input type="text" class="form-control" name="nama" placeholder="Nama">
    </div>
    <div class="form-group">
    <label>Unit Pendidikan</label> <br>
        <select name="unit_pendidikan" class="form-control">
             <option value="unit pendidikan">Pilih Unit Pendidikan</option>
             <option value="TK">TK</option>
             <option value="SD">SD</option>
             <option value="SMP">SMP</option>
             <option value="SMA">SMA</option>
             <option value="SMK">SMK</option>
        </select>
    </div>
    <div class="form-group">
    <label>Tanggal Gaji</label>
    <input type="date" class="form-control" name="tgl_gaji">
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3><center>Gaji</center></h3>
      </div>
    </div>
    <div class="form-group mt-3">
    <label>Jabatan</label> <br>
        <select name="jabatan" class="form-control">
             <option value="pilih jabatan">Pilih Jabatan</option>
             <option value="Kepala Sekolah">Kepala Sekolah</option>
             <option value="Wakasek">Wakasek</option>
             <option value="Guru">Guru</option>
             <option value="Karyawan">Karyawan</option>
        </select>
    </div>
    <div class="form-group">
         <label>Lama Kerja</label>
         <input type="text" class="form-control" name="lama_kerja" placeholder="Lama Kerja">
    </div>
    <div class="form-group">
    <labe>Status Kerja</label> <br>
        <select name="SK" class="form-control">
             <option value="Pilih Status Kerja">Pilih Status Kerja</option>
             <option value="Tetap">Tetap</option>
             <option value="Kontrak">Kontrak</option>
        </select>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3><center>Potongan</center></h3>
      </div>
    </div>
    <div class="form-group mt-3">
         <label>BPJS</label>
         <input type="text" class="form-control" name="bpjs">
    </div>
    <div class="form-group">
         <label>Pinjaman</label>
         <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman">
    </div>
    <div class="form-group">
         <label>Tabungan</label>
         <input type="text" class="form-control" name="tabungan" placeholder="Tabungan">
    </div>
    <div class="form-group">
         <label>Lainnya</label>
         <input type="text" class="form-control" name="lainnya" placeholder="Lainnya">
    </div>
    <button type="submit" class="btn btn-primary" name="proses"><center>Proses</center></button>
  </div>
</div>
</body>
</html>





    