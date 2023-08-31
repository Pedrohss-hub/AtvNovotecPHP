<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>

    <?php 
        $name = "Souza";
        $born = 2018;
        $year = date("Y");

        $age = $year - $born;

        if ($age >= 18){
            echo "$name é maio de 18 e tem <strong>$age<strong> anos";

        } else{
            echo "$name é menor de 18 e tem <strong>$age<strong> anos";

        }
    ?>

<!-- <a href="index.php"><button>Index</button></a> -->
</body>
</html>