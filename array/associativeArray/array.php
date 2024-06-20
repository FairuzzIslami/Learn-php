<?php
    $array = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php foreach ($array as $angka) { ?>
        <?php foreach ($angka as $a) { ?>
            <div><?php echo $a; ?></div>
        <?php } ?>
        <div class="clear"></div>
    <?php } ?>
</body>
</html>
