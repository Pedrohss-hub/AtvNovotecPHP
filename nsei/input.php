<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Input</h1>
    <form action="input.php" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST["num"] ?? 0?>">
        <input type="submit" value="Enviar">
    </form>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
        $numAnt = $num-1;
        $numPos = $num+1;
    ?>

    <div class="resp">
        <span>Anterior: <?= $numAnt?></span>
        <span><strong>Atual</strong>: <?= $num?></span>
        <span>Posterior: <?= $numPos?></span>
    </div>

    <a href="index.html">Index</a>
    
</body>
</html>