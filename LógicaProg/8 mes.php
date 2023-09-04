<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $num = 12;

        if ($num >= 1 && $num <=12){
            $month = date('F', mktime(0,0,0,0, $num, 1));
            echo $month;

        } else{
            echo "valor inválido: <strong>$num<strong>";
        }
    ?>
<a href="index.php"><button>Index</button></a>

</body>
</html>