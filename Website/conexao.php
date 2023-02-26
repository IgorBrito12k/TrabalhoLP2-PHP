<h1>banco de dados teste de conexao</h1>
<?php
    //dados do banco
    $server   = "mysql_db";
    $username = "root";
    $password = "root";
    $database = "trabalholp2";
    
// Cria a conexão
$conexao = new mysqli($server, $username, $password, $database);

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
} 
?>