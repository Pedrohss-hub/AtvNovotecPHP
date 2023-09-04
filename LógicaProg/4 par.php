<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Par ou Ímpar</h1>
    <form class="container" action="4 par.php" method="get">
        <label for="num">Insira o valor aqui</label>
        <input type="number" name="num" value="<?= $_REQUEST["num"] ?? '0'?>">
        <input type="submit" value="Enviar">
    </form>

    <p>
        <?php
            $num = $_REQUEST["num"];
        
            if($num % 2 == 0){
                if ($num == 0) {
                    echo "Valor Inválido";
                } else {
                    echo "<strong>$num<strong> é par";
                }
        
            } else {
                echo "<strong>$num<strong> é ímpar";
            }
        ?>
    </p>
<br>
<a  class="button-index" href="index.php">Index</a>

    
</body>
</html>