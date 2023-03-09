<?php

    //dados do banco
    $dbtype   = "mysql";
    $host     = $_ENV['DB_HOST']     ?? "localhost";
    $port     = $_ENV['DB_PORT']     ?? "3306";
    $user     = $_ENV['DB_USER']     ?? "root";
    $password = $_ENV['DB_PASSWORD'] ?? "senha";
    $db       = $_ENV['DB_NAME']     ?? "hospitalBD";
    try
        {   //vamos conectar
            $conexao = new PDO($dbtype.":host=".$host.
            ";port=".$port.";dbname=".$db, $user, $password);
            echo "<p>Banco de dados conectado.</p>";
        }
    catch (PDOException $i)
    {
        //se houver exceção, exibe
        die("Erro: <code>" . $i->getMessage() . "</code>");
    }
?>


