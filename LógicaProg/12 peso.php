<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="title">Peso Ideal</h1>
    <form action="12 peso.php" class="container" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST['num'] ?? ''?>">
        <input type="submit" value="Clique Aqui">
    </form>
    
    <p>
        <?php
            $height = $_REQUEST['num'] ?? '0';
    
            echo $height."<br><br>";
    
            echo "Peso ideal para Homens: ". ((72.7*$height)-58) ."<br>";
            echo "Peso ideal para Mulhere: ". ((62.1*$height)-44.7) ."<br>";
        
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>