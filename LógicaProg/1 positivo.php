<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+ ou -</title>
</head>
<body>
    <h1 class="title">Positivo ou Negativo</h1>

    <form class="container" action="1 positivo.php" method="get">
        <input type="number" name="num" id="" value="<?= $_REQUEST["num"] ?? '0'?>">
        <input type="submit" value="Enviar">
    </form>
    
    <?php 
        $num = $_REQUEST["num"];
        if ($num < 0 ){
            $result = "<strong>Negativo</strong>";
        
        } else if ($num > 0) {
            $result = "<strong>Positivo</strong>";

        } else {
            $result = "<strong>Nulo</strong>";

        }
    ?>

    <p class="resp">O número é: <?= $result?></p>
    <a class="button-index" href="index.php">Index</a>


<!-- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

</body>
</html>