<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>> ou <</title>
</head>
<body>
    <h1 class="title">Maior ou Menor</h1>
    <form action="6 maior.php" class="container">
        <div class="input-number">
            <input type="number" name="num1" id="" value="<?= $_REQUEST["num1"] ?? '0'?>">
            <input type="number" name="num2" id="" value="<?= $_REQUEST["num2"] ?? '0'?>">
        </div>
        <input type="submit" value="Enviar">
    </form>
    <p>
        <?php
                $num1 = $_REQUEST['num1'] ?? 0;
                $num2 = $_REQUEST['num2'] ?? 0;
        
                if ($num1 < $num2) {
                    echo "$num1 é menor que $num2";
        
                } else if ($num1 > $num2){
                    echo "$num1 é maior que $num2";
        
                } else {
                    echo "$num1 é igual a $num2";
        
                }
        
        ?>
    </p>

    <a  class="button-index" href="index.php">Index</a>

</body>
</html>