<?php
//pengulangan php

$BarangToko = [
    ["Buku Tulis","ATK0001","Rp.10.000,-","100"],
    ["Bolpen Standard","ATK0002","Rp.2.500,-","50"],
    ["Penghapus","ATK0003","Rp.2.000,-","30"],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Daftar Barang Toko</title>
    </head>
    <body>
        <h2>Daftar Barang Toko ABC</h2>

        <?php foreach ($BarangToko as $brg) : ?>
            <ul>
                <li><?= $brg[0]?></li>
                <li><?= $brg[1]?></li>
                <li><?= $brg[2]?></li>
                <li><?= $brg[3]?></li>
            </ul>
            <?php endforeach; ?>
    </body>
</html>