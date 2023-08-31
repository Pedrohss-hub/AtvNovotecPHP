<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>

<body>
    <?php
        $prime = true;
        for ($num = 1; $num < 401; $num++){
            $raiz = sqrt($num);

            if($num<3){
                echo "Número: ".$num."<br>";
                echo "Sua Raiz: ".$raiz."<br>";
                echo $num."<br><br>";

            }else{
                for($i = 2; $i <= $raiz; $i++){
                    if($num % $i != 0){
                        // echo "Divisor:".$i."<br>";
                        $prime = true;
                    } else {
                        $prime = false;
                        break;
                    }
                }
                // if(!$prime){
                //     echo $num." Não é primo <br><br>";
                // }
    
                if ($prime) {
                    echo "Número: ".$num."<br>";
                    echo "Sua Raiz: ".$raiz."<br>";
                    echo $num."<br><br>";
                    
                }
            }
        }

    ?>

    <!-- 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199 -->
</body>

</html>