<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'name');
$nasc = filter_input(INPUT_POST, 'nasc');
$cpf = filter_input(INPUT_POST, 'cpf');
$celular = filter_input(INPUT_POST, 'fone');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco');
$senha = filter_input(INPUT_POST, 'senha');

echo "Nome: $nome <br>";
echo "data de nascimento: $nasc <br>";
echo "cpf: $cpf <br>";
echo "celular: $celular <br>";
echo "email: $email <br>";
echo "endereco: $endereco <br>";
echo "senha: $senha <br>";

$result_usuarios = "INSERT INTO usuarios(nome, nasc, cpf, celular, email, endereco, senha) 
    VALUES ('$nome', '$nasc', '$cpf', '$celular', '$email', '$endereco', '$senha')";

//executar a query
$resultado_usuario = mysqli_query($conexao, $result_usuarios);

//se não houver inserção de dados
if (!$result_usuarios){
    echo "Erro na query: " . mysqli_error($conexao);
}

//verificar se foi salvo e voltar para a tela de cadastro
if (mysqli_insert_id($conexao)) {
    header("Location: login.php");
} else {
    header("Location: cadastro.php");
}

?>