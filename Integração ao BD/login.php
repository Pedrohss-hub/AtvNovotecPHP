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
    </form>

    <?php

        require_once('conexao.php');

        if (!empty($_GET['pesquisaUser']) && !empty($_GET['pesquisaSenha'])) { 
            $conn = new mysqli($serveName, $userName, $password, $dbName);
        
            if ($conn->connect_error) {
                die("Erro na conexão: ". $conn->connect_error);
            }
        
            function executeSQL($sql) {
                global $conn;
                $result = $conn->query($sql);
                return $result;
            }
        
            $conn->close();

            $dig_user = $_GET['pesquisaUser'];
            $dig_senha = $_GET['pesquisaSenha'];
        
            // Execute a consulta para obter o hash da senha do banco de dados
            $sqlComand = "SELECT senha FROM users WHERE usuario = '$dig_user'";
            $result = $con->query($sqlComand);
        
            if ($result->num_rows > 0) {
                $senhaDB = $result->fetch_assoc()['senha'];
                echo "$senhaDB ";
                echo gettype($senhaDB)."<br>" ;

                echo "$dig_senha ";
                echo gettype($dig_senha)."<br><br>";


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
        
            $con->close();
        }
        
    ?>
</body>
</html>