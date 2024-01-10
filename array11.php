<!DOCTYPE html>
<html>
<head>
    <title>Latihan foreach endforeach</title>
    <style>
        .cube-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            justify-content: center;
            align-content: center;
            width: 180px; /* Adjust as needed */
            height: 180px;
        }

        .cube {
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
        }
    </style>
</head>
<body>

<div class="cube-grid">
    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="cube"><?php echo $b; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

</body>
</html>
