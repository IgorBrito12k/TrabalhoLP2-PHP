<h1>banco de dados teste de conexao</h1>
<?php
    //dados do banco
    $dbtype   = "mysql";
    $host     = "localhost";
    $port     = "3306";
    $user     = "maria_db";
    $password = "root";
    $db       = "trabalholp2";

    $conexao = new mysqli('mysql_db', 'root', 'root', 'mysql');
    
    if($conexao) {
        echo "Conectado!!";
    } else {
        echo "Não conectado!";
    }
?>