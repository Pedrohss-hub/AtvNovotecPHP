<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Pesquisa de Modelos de Carros</h1>

    <form action="" method="GET">
        <label for="pesquisa">Pesquisar Modelor</label>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o modelo">
        <input type="submit" value="pesquisar">
    </form>

    <?php 
        $serveName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "escola";

        $con = new mysqli($serveName, $userName, $password, $dbName);

        if($con -> connect_error) {
            die("Conexão falhou: ".$con->connect_error);
        }

        if(isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
            $pesquisa = $_GET['pesquisa'];
            $sql = "SELECT * FROM sala3c WHERE Nome LIKE '%$pesquisa%'";
            $result = $con -> query($sql);

            if($result -> num_rows > 0) {
                echo "<h2>Resultado da Pesquisa: </h2>";
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>{$row['id']} - {$row['Nome']}";
                }
                echo "</ul>";
            } else {
                echo "<p>...</p>";
            }
        }

        $con -> close();
    ?>
</body>
</html>