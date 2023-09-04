<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pódio</title>
</head>
<body>

    <h1 class="title">Pódio</h1>
    <form action="15 podio.php" class="container" method="get">
        <input type="submit" value="Clique Aqui">
    </form>
    <p>
        <?php
            $num = [];

            for($i = 0; $i < 3; $i++){
                $num[] = rand(0,10);
            }

            $holdNum = null;
        
            for($i = 0; $i < count($num); $i++){
                for($c = $i+1; $c < count($num); $c++){
                    if ($num[$c] < $num[$i]){
                        $holdNum = $num[$i];
                        $num[$i] = $num[$c];
                        $num[$c] = $holdNum;
                    }
                }
            }
            echo $num[count($num) -1]."<br>";
            $resp = implode(", ", $num);
            echo $resp;
        ?>
    </p>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>