<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="userPage.css">
    <title>Página Usuário</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <header>
        <span class="user-header">Usuário: <?= $_SESSION['userLogin'] ?? ''?></span>
        <img class="img-header" src="user.png" alt="...">
    </header>
    <a class="exit" href="index.php">Sair</a>
    <form class="main" action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <div class="box-input">
            <label for="">Digite o Modelo de Carro</label>
            <input type="text" name="searchCar" value="<?= $_POST['searchCar'] ?? ''?>">
        </div>
        <input type="submit" value="Procurar">
    </form>

    <div class="centralizar">
        <?php
            require_once('conexaoCar.php');
            $dig_car =  $_POST['searchCar'] ?? '';
            $sqlComand = "SELECT * FROM carros WHERE Modelo LIKE '%$dig_car%'";
            $result = $conn->query($sqlComand);
            if(!empty($_POST['searchCar'])){
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<p>".$row['Modelo']." ".$row['Marca']." ". $row['Ano']."</p>";
                    }
                } else {
                    echo"Nenhum Modelo Encontrado";
                }
                $conn->close();
            }
        ?>
    </div>
</body>
</html>