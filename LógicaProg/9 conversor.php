<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Metros</title>
</head>
<body>
    <h1 class="title">Conversor de Metros</h1>

    <form action="9 conversor.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST['num'] ?? ''?>">
        <input type="submit" value="Clique Aqui">
    </form>

    <p>
        <?php
            $num = $_REQUEST['num'] ?? 0;
            if ($num == 0){
                echo "Valor Inválido";

            } else {
                echo "$num m é igual a ". ($num*100) ." cm";

            }
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>