<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FatoraçãoR</title>
</head>
<body>

    <h1 class="title">Fatoração</h1>
    <form class="container" action="3 fatorar.php">
        <label for="num">Insira um Número</label>
        <input type="number" name="num" value="<?= $_REQUEST['num'] ?? '0'?>">
        <input type="submit" value="Enivar">
    </form>

    <?php 
        $num = $_REQUEST['num'] ?? 0;
        $holdNum = [];

        for ($i = 2; $i <= $num; $i++){
            while ($num % $i == 0){
                $holdNum[] = $i;
                $num = $num/$i;
            }
        }

        echo "<p>";
        echo implode(" * ",$holdNum);
        echo " =  ".array_product($holdNum);
        echo "</p>";
        echo "<br>"      
    ?>

    <a class="button-index" href="index.php">Index</a>

</body>
</html>