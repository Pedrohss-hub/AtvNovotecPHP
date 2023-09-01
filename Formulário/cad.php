<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <?php
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $repsenha = $_REQUEST["repsenha"];
    ?>
    
    <h1 class="title">Seus Dados</h1>
    <section class="container">
        <div class="box-date">
            <img src="user.jpg" alt="">
            <div class="box-name">
                <p><?php echo $nome;?></p><br>
                <p><?php echo $email;?></p>
            </div>
        </div>
        
        <a href="index.html"><button class="button-form">Voltar</button></a>
    </section>

</body>
</html>