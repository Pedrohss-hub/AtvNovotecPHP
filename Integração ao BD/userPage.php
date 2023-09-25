<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php        
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
        $serveName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "user_log";

        $conn = new mysqli($serveName, $userName, $password, $dbName);

        //verifica a conexão
        if($conn -> connect_error){
            die("Conexão falhou: " . $conn -> connect_error);

        }

        //verificar login
        $userLogin = $_POST['login'];
        $passLogin = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO usuario (usuario, senha) VALUES (?, ?)");
        $stmt->bind_param("ss", $userLogin, $passLogin);

        $stmt->execute([$userLogin, $passLogin]);
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
       $userLogin = $_GET['user'];
       $passLogin = $_GET['senha'];
    }


    ?>

    <div class="box">
        <div class="textos">
            <h2 class="username"> Seu username é:<?= $userLogin ?? $dig_user ?></h2>
            <h2 class="password"> Sua senha é: <?= $passLogin ?? $dig_senha ?></h2>
            <a href="index.php">Página Inicial</a><br>
            <a href="login.php">Página de Login</a>
        </div>
    </div>
</body>
</html>