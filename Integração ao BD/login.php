<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- <form action="" method="get">
        <div class="box">
            <h1>Faça seu login!</h1>
            Username:<input class="inputUser" type="text" name="pesquisaUser" required></br></br>
            Password:<input class="inputPass" type="password" name="pesquisaSenha" required></br></br>
            <input type="submit" value="Login" class="btn">
            <a href="index.php">Cadastre-se</a>
        </div>
    </form> -->

    <form class="container-main" action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <h1 class="title">Faça o seu Login</h1>
        <div class="section-input">
            <div class="box-input">
                <label for="">Usuário:</label>
                <input type="text" name="pesquisaUser" placeholder="Digite o nome de usuário aqui"  required>
            </div>
            <div class="box-input">
                <label for="">Senha:</label>
                <input type="password" name="pesquisaPassword" placeholder="Digite a sua Senha aqui"  required>
            </div>
        </div>
        <input type="submit" value="Entrar">
        <span class="text-below">Não é Registrado? <a href="index.php">Clique Aqui</a></span>
        <?php

                require_once('conexaoUser.php');
                $dig_user = $_GET['pesquisaUser'] ?? '';
                $dig_senha = $_GET['pesquisaPassword'] ?? '';

                // Execute a consulta para obter o hash da senha do banco de dados
                $sqlComand = "SELECT Senha FROM users WHERE Nome = '$dig_user'";
                $result = $conn->query($sqlComand);
                if (!empty($dig_user) && !empty($dig_senha)){
                    if ($result->num_rows > 0) {
                    $senhaDB = $result->fetch_assoc()['Senha'];
                    $hashSenha = password_hash($senhaDB, PASSWORD_DEFAULT);
                    // Verificar a senha usando password_verify
                    if (password_verify($dig_senha, $hashSenha)) {
                        session_start();
                        $_SESSION['userLogin'] = $dig_user;
                        $_SESSION['passLogin'] = $dig_senha;
                        header("Location: userPage.php?senha=$dig_senha&user=$dig_user");
                    } else {
                        $mensageError = "Usuário ou senha Incorreta!";
                    }
                } else {
                    $mensageError = "Usuário ou senha Incorreta!";
                }}

                $conn->close();
        ?>
    </form>
    <p class="text-error"><?= $mensageError ?? ''?></p>

</body>

</html>