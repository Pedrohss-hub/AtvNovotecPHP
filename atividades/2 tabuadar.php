<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuadaR</title>
</head>
<body>
    <?php 
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];

        for($num1; $num1 <= $num2; $num1++){
            
            for($i = 1; $i <= 10; $i++){
                echo $num1." x ".$i." = ". $num1 * $i."<br>";
            }
            echo "<br>";
        }
    ?>
    <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    <a href="index.php"><button>Index</button></a>

</body>
</html>