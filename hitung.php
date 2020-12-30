<?php

$nama['B001'] = "Monitor Samsung 15'";
$nama['B002'] = "Monitor LG 14'";
$nama['B003'] = "CD-RW Samsung";
$nama['B004'] = "Memory Card 256";
$nama['B005'] = "Hard Disk Seagate 512";

$harga['B001'] = 500000;
$harga['B002'] = 400000;
$harga['B003'] = 300000;
$harga['B004'] = 450000;
$harga['B005'] = 570000;

$total = 0;
for ($i = 1; $i <= 5; ++$i)
{
    $key = 'B00' . strval($i);
    $total += $_POST[$key] * $harga[$key]; 
}
echo "<strong>Total Harga = Rp" . $total . ".</strong>";

?>