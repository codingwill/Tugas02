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

?>


<html>

<head>

</head>

<body>

<!-- Form Pembelian -->
<form action="hitung.php" method="POST">
    <table>

    <tr>
        <th>
            <strong>Kode Barang</strong>     
        </th>
        <th>
            <strong>Nama</strong>     
        </th>
        <th>
            <strong>Harga</strong>     
        </th>
        <th>
            <strong>Jumlah Beli</strong>     
        </th>
    </tr>

    <?php
    
    for ($i = 1; $i <= 5; ++$i)
    {
        $key = 'B00' . strval($i);
        echo "<tr>
            <th> "
                . $key .
            "</th>
            <th>"
                . $nama[$key] .
            "</th>
            <th>"
                . $harga[$key] .
            '</th>
            <th>
                <input type="number" name="' . $key . '" value="0">;
            </th>
            <tr>';
    }

    ?>

    </table>

    <input type="submit" value="Beli">
</form>
</body>

</html>