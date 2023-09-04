<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <h1 class="title">Tabuada</h1>
    <form class="container container2"action="2 tabuada.php" method="get">
        <div class="input-number">
            <div class="box">
                <label for="">1º valor</label>
                <input type="number" name="num1" value="<?= $_REQUEST['num1'] ?? ''?>">
            </div>
            <div class="box">
                <label for="">2º valor</label>
                <input type="number" name="num2" value="<?= $_REQUEST['num2'] ?? ''?>">
            </div>
        </div>
        <input type="submit" value="Enviar">
    </form>

    <div class="tabuada">
    <?php 
        $num1 = $_REQUEST["num1" ?? 0];
        $num2 = $_REQUEST["num2" ?? 0];

        if ($num1 && $num2 != null){
            for($num1; $num1 <= $num2; $num1++){
            echo "<div class='itens-tabuada'>";
            for($i = 1; $i <= 10; $i++){
                echo $num1." x ".$i." = ". $num1 * $i."<br>";
            }
            echo "</div>";
            echo "<br>";
        }}
    ?>
    </div>
    <a  class="button-index" href="index.php">Index</a>

</body>
</html>