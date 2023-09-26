<?php 
    $serveName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "user_log";

    $conn = new mysqli($serveName, $userName, $password, $dbName);

    if ($conn->connect_error) {
        die("Erro na conexão: ". $conn->connect_error);
    }

    function executeSQL($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }
?>