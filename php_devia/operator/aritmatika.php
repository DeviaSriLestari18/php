<?php
$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji - ($gaji * $pajak);
echo "gaji sebelum dipotong pajak : <b>$gaji</b><br>";
echo "gaji bersih : <b> Rp. $thp</b><br>";

?>