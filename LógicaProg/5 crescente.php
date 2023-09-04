<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescente</title>
</head>
<body>
    <h1 class="title">Organizador de Números</h1>

    <form class="container" action="" method="get">
        <input type="submit" value="Clique Aqui">
    </form>

    <p>
        <?php
            $holdNum = null;
            //Gerar valores aleatórios
            for($i = 0; $i <= 5; $i++){
                $num[] = rand(0,100);
            }
            $resp = implode(", ", $num);
            echo "Inicial: ".$resp."<br><br>";
            //Organizar os Valores
            for($i = 0; $i < count($num); $i++){
                for($c = $i+1; $c < count($num); $c++){
                    if ($num[$c] < $num[$i]){
                        $holdNum = $num[$i];
                        $num[$i] = $num[$c];
                        $num[$c] = $holdNum;
        
                    }
                }
            }
            $resp = implode(", ", $num);
            echo "Final: ".$resp;
        ?>
    </p>

    <a  class="button-index" href="index.php">Index</a>

</body>
</html>