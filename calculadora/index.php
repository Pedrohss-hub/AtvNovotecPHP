<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body> 
    <h1 class="title">Calculadora</h1>

    <section>

        <form class="container" method="get">

            <div class="operation">
                <input type="number" name="num1" id="idnum1" required value="<?= $_REQUEST['num1'] ?? ''?>">
                <select name="ope" id="">
                    <option value="soma" <?= ($_REQUEST['ope'] ?? '+') === 'soma' ? 'selected' : '' ?>>+</option>
                    <option value="sub" <?= ($_REQUEST['ope'] ?? '+') === 'sub' ? 'selected' : '' ?>>-</option>
                    <option value="div" <?= ($_REQUEST['ope'] ?? '+') === 'div' ? 'selected' : '' ?>>/</option>
                    <option value="mult" <?= ($_REQUEST['ope'] ?? '+') === 'mult' ? 'selected' : '' ?>>x</option>
                </select>
                
                <input type="number" name="num2" id="idnum2" required value="<?= $_REQUEST['num2'] ?? ''?>">
            </div>

            <input class="button" type="submit" value="=">
        </form>

    </section>

    <?php 
        $num1 = $_REQUEST["num1"] ?? 0;
        $num2 = $_REQUEST["num2"] ?? 0;
        $ope = $_REQUEST["ope"] ?? 0;
        switch($ope) {
            case 'soma':
                $result = $num1 + $num2;
                break;

            case 'sub':
                $result = $num1 - $num2;
                break;

            case 'mult':
                $result = $num1 * $num2;
                break;

            case 'div':
                if ($num1 == 0 && $num2 == 0){
                    $result = '...';
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }
    ?>

    <div class="resp">
        <?php 
            echo $result ?? '...';
        ?>
    </div>

</body>
</html>