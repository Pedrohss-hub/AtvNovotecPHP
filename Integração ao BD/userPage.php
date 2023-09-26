<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php     

    require_once('conexao.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  

        //verificar login
        $userLogin = $_POST['login'];
        $passLogin = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO users (nome, senha) VALUES (?, ?)");
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
            <h2 class="username"> Seu username é:<?= $userLogin ?? '' ?></h2>
            <h2 class="password"> Sua senha é: <?= $passLogin ?? '' ?></h2>
            <a href="index.php">Página Inicial</a><br>
            <a href="login.php">Página de Login</a>
        </div>
    </div>
</body>
</html>