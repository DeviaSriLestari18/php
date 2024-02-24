<?php
$nama = "devia"; // string
$umur = 17;// integer
$nilai = 87.5; // float
$status = true; //boolean

echo "Nama : $nama <br>";
echo 'Umur : '. $umur . '<br>';
printf("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "Status siswa aktif";
} else {
    echo "Status siswa tidak aktif";
}
?>