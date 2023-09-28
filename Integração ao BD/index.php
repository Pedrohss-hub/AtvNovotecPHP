<!-- <!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
    <form class="box" action="userPage.php" method="post">
        <h1 class="title">Faça seu registro!</h1>
        Username:<input class="inputUser" type="text" name="login" required></br></br>
        Password:<input class="inputPass" type="password" name="password" required></br></br>
        <input type="submit" value="Registrar" class="btn">
        <a href="login.php">Já sou cadastrado</a>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Registro</title>
</head>
<body>
    <form class="container-main" action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <h1 class="title">Faça o seu Registro</h1>
        <div class="section-input">
            <div class="box-input">
                <label for="">Usuário:</label>
                <input type="text" name="user" placeholder="Digite o nome de usuário aqui" required>
            </div>
            <div class="box-input">
                <label for="">Senha:</label>
                <input type="password" name="password" placeholder="Digite a sua Senha aqui" required>
            </div>
        </div>
        <input type="submit" value="Registrar">
        <span class="text-below">Já é Registrado? <a href="login.php">Clique Aqui</a></span>
    </form>
    <?php 
    require_once('conexaoUser.php');
        $userLogin = $_POST['user'] ?? '';
        $passLogin = $_POST['password'] ?? '';

        $sqlComand = "SELECT Senha FROM users WHERE Nome = '$userLogin'";
        $result = $conn->query($sqlComand);

        if(!empty($userLogin) && !empty($passLogin) ){
            if ($result->num_rows > 0) {
            echo"<p class='text-error'>Nome de Usuário Existente</p>";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (Nome, Senha) VALUES (?, ?)");
            $stmt->bind_param("ss", $userLogin, $passLogin);
            $stmt->execute([$userLogin, $passLogin]);
            session_start();
            $_SESSION['userLogin'] = $userLogin;
            $_SESSION['passLogin'] = $passLogin;
            header("Location:userPage.php?user=$userLogin&senha=$passLogin");
        }

        $conn->close();
    }
    ?>

</body>
</html>