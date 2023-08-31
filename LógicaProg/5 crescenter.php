<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
        $num = [2,0,9,10,0,1,2,3,45,2];
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

        $resp = implode(", ", $num);
        echo $resp;
    ?>

<!-- <a href="index.php"><button>Index</button></a> -->

</body>
</html>