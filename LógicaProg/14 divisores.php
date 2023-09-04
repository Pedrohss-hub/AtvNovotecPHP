<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
        $num = 19;
        $div = [];

        for ($i = 1; $i<= $num; $i++){
            if ($num % $i == 0){
                $div[] = $i;
            }

        }

        $rep = implode(", ", $div);
        echo $rep;

    ?>
<a href="index.php"><button>Index</button></a>

</body>
</html>