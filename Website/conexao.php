<?php
    //dados do banco
    $dbtype   = "MySQL";
    $host     = "localhost";
    $port     = "3306";
    $server   = "mysql_db";
    $username = "root";
    $password = "root";
    $database = "trabalholp2";
    
//vamos conectar
try {   
    $conexao = new mysqli($server, $username, $password, $database);
    // echo "Banco de dados conectado.<br><br>";
    // echo "Estes são os dados cadastrados com sucesso: <br><br>";
} catch (Exception $e) {
    //se houver exceção, exibe
    die ("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>

