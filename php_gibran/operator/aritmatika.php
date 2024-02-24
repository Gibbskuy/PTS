<?php
$gaji = 1000000;
$pajak = 0.025;

$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum di poyong pajak : <b>Rp. $gaji</b><br>";
echo "Gaji bersih : <b>Rp. $thp</b>";

?>