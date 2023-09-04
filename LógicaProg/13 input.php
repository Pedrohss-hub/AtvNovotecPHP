<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h1 class="title">Input</h1>
    <form action="13 input.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST['num'] ?? '' ?>">
        <input type="submit" value="Clique Aqui">
    </form>

    <p>
        <?php
                $num = $_REQUEST['num'] ?? '';
        
                echo $num;
        ?>
    </p>

    <a  class="button-index" href="index.php">Index</a>

</body>
</html>