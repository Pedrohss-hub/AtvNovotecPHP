<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>

    <?php 
        $num = 10;
        
        if($num % 2 == 0){
            echo "<strong>$num<strong> é par";
        
        } else if ($num == 0){
            echo "<strong>$num<strong> é ímpar";

        } else {
            echo "<strong>$num<strong> é igual a 0";    
        }
    ?>

<!-- <a href="index.php"><button>Index</button></a> -->
</body>
</html>