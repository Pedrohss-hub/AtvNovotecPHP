<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
        $nota = [10,9,8,2,0];

        $ind = count($nota);
        $sum = array_sum($nota);

        echo "A média é: ". $sum/$ind;
    ?>

<a href="index.php"><button>Index</button></a>

</body>
</html>