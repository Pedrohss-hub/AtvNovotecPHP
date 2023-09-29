<?php 
    $serveName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "automoveis";

    $conn = new mysqli($serveName, $userName, $password, $dbName);

    if ($conn->connect_error) {
        die("Erro na conexão: ". $conn->connect_error);
    }

    function executeSQLCar($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }
?>