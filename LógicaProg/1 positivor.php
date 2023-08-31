<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php 
        $num = $_REQUEST["num"];
        if ($num < 0 ){
            echo "O número ".$num." é <strong>Negativo<strong>";
        } else if ($num > 0) {
            echo "O número ".$num." é <strong>Positivo<strong>";
        } else {
            echo "O número ".$num." é igual a <strong>Zero<strong>";
        }
    ?>
    <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    <a href="index.php"><button>Index</button></a>
</body>
</html>