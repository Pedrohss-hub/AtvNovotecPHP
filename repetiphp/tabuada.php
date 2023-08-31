<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $c = 0;
        for($i = 0; $i < 1101; $i++){
            while ($c <11){
                $total = $i*$c;
                echo $i." x ".$c." = ".$total."<br>";
                $c++;
            }
            echo "<br>";
            $c =0;
        }
    ?>
</body>
</html>