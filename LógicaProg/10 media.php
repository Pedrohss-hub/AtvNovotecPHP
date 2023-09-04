<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1 class="title">Média</h1>
    <form action="10 media.php" class="container" method="get">
        <input type="submit" value="Clique Aqui">
    </form>
    <p>
        <?php
            for($i = 0; $i < 4; $i++){
                $nota[] = rand(0,10);
            }
            $ind = count($nota);
            $sum = array_sum($nota);

            $resp = implode(", ",$nota);

            echo "Notas: ". $resp."<br><br>";
            echo "A média é: ". $sum/$ind;
        ?>
    </p>

    <a  class="button-index" href="index.php">Index</a>

</body>
</html>