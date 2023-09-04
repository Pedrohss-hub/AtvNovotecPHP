<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>
    <h1 class="title">Divisores</h1>
    <form action="14 divisores.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST['num'] ?? ''?>">
        <input type="submit" value="Clique Aqui">
    </form>
    <p>
        <?php
            $num = $_REQUEST['num'] ?? 0;
            $div = [];
            for ($i = 1; $i<= $num; $i++){
                if ($num % $i == 0){
                    $div[] = $i;
                }
            }
            $rep = implode(", ", $div);
            echo $rep;
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>