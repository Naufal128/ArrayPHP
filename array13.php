<?php 
//pengulangan php
//for /foreach
$mahasiswa = ["Rudi Nugroho", "1202172060", "Sistem Informasi", "rudi@telkomuniversity.ac.id"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>
