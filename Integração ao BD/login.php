<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="" method="get">
        <div class="box">
            <h1>Faça seu login!</h1>
            Username:<input class="inputUser" type="text" name="pesquisaUser" required></br></br>
            Password:<input class="inputPass" type="password" name="pesquisaSenha" required></br></br>
            <input type="submit" value="Login" class="btn">
            <a href="index.php">Cadastre-se</a>
        </div>
        <?php
        if (!empty($_GET['pesquisaUser']) && !empty($_GET['pesquisaSenha'])) {
            require_once('conexao.php');
            $dig_user = $_GET['pesquisaUser'];
            $dig_senha = $_GET['pesquisaSenha'];

            // Execute a consulta para obter o hash da senha do banco de dados
            $sqlComand = "SELECT Senha FROM users WHERE Nome = '$dig_user'";
            $result = $conn->query($sqlComand);

            if ($result->num_rows > 0) {
                $senhaDB = $result->fetch_assoc()['Senha'];

                $hashSenha = password_hash($senhaDB, PASSWORD_DEFAULT);


                // Verificar a senha usando password_verify
                if (password_verify($dig_senha, $hashSenha)) {
                    header("Location: userPage.php?senha=$dig_senha&user=$dig_user");
                } else {
                    echo "Senha incorreta.";
                }
            } else {
                echo "Usuário não encontrado.";
            }

            $conn->close();
        }
        ?>
    </form>
</body>

</html>