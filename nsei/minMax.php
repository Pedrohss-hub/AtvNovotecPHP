<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mínimo e Máximo</title>
</head>
<body>
    <?php 
        $num = [1,5,2,1,6,-1,10,2];
        $numMin = $num[0];
        $numMax = $num[0];

        for($i=0; $i < count($num); $i++){
            if ($numMin > $num[$i]){
                $numMin = $num[$i];
            }
            if ($numMax < $num[$i]){
                $numMax = $num[$i];
            }
                
        }
        $num = implode(", ", $num);

        echo $num."<br><br>";
        echo $numMin."<br>";
        echo $numMax."<br>";

    ?>
    <a href="index.html">Index</a>
</body>
</html>