<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor De Moeda</h1>
    <form action="Conversor.php" method="post">
        <label for="num">Valor em Real</label>
        <input type="number" name="num" id="" value="<?= $_REQUEST["num"] ?? 0?>">
        <input type="submit" value="Enviar" value="Enviar">
    </form>

    <?php 
        $num = $_REQUEST["num"] ?? 0;

        $dol = round($num/4.94, 2);
        $iene = round($num/0.034, 2);
        $euro = round($num/5.30, 2);
    ?>
    <div class="resp">
        <span>Dolár: $<?=$dol ?? 0?></span>
        <span>Iene: ¥<?=$iene ?? 0?></span>
        <span>Euro: €<?=$euro ?? 0?></span>
    </div>

    <a href="index.html">Index</a>
</body>
</html>