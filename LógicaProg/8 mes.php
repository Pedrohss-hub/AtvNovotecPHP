<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Mês</h1>

    <form action="8 mes.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST["num"] ?? ''?>">
        <input type="submit" value="Clique Aqui">
    </form>
    
    <p>
        <?php
                $num = $_REQUEST['num'] ?? 0;
                if ($num >= 1 && $num <=12){
                    $month = date('F', mktime(0,0,0, $num, 1));
                    echo $month;
                } else{
                    echo "valor inválido";
                }
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>
</body>
</html>