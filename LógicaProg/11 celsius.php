<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit</title>
</head>
<body>
    <h1 class="title">Conversor de fahrenheit</h1>
    <form action="11 celsius.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST['num'] ?? '0'?>">
        <input type="submit" value="Clique Aqui">
    </form>

    <p>
        <?php
            $fahren = $_REQUEST['num'] ?? 0;
            $cel = number_format((5*($fahren-32)/9), 2);
            echo "$fahren °F é igual a $cel °"
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>