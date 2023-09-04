<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="atividades.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="container">Idade</h1>
    <form action="7 idade.php" class="container" method="get">
        <input type="text" name="name" id="" placeholder="Digite o seu nome" value="<?= $_REQUEST['name'] ?? ''?>">
        <label for="number">Ano de nascimento</label>
        <input type="number" name="born" id="" value="<?= $_REQUEST['born'] ?? ''?>">
        <input type="submit" value="Verificar">
    </form>
    <p>
        <?php
                $name = $_REQUEST['name'] ?? '';
                $born = $_REQUEST['born'] ?? '0';
                $year = date("Y");
                $age = $year - $born;
                if ($age >= 18){
                    echo "$name é maio de 18 e tem <strong>$age<strong> anos";
                } else{
                    echo "$name é menor de 18 e tem <strong>$age<strong> anos";
                }
            ?>
    </p>

    <a  class="button-index" href="index.php">Index</a>

</body>
</html>