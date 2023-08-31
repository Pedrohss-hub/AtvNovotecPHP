<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FatoraçãoR</title>
</head>
<body>
    <?php 
        // $num = $_REQUEST["num"];
        
        // Inserir os dados aqui
        $num = 1000;
        $holdNum = [];

        for ($i = 2; $i <= $num; $i++){
            while ($num % $i == 0){
                $holdNum[] = $i;
                $num = $num/$i;
            }
        }

        echo implode(" * ",$holdNum);
        echo " =  ".array_product($holdNum);
        echo "<br>"

        
    ?>
    <!-- <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    <a href="index.php"><button>Index</button></a> -->

</body>
</html>