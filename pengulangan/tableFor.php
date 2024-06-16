<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding= '10'cellspacing='0'>
        <?php
        for($i = 0 ; $i <= 5; $i++){
            echo '<tr>';
            for($j = 5; $j >= 1 ; $j--){
                echo "<td> hello bang </td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>