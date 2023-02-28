<?php
require_once("topo.php");
//verificar se digitou e-mail e senha
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //verificar se existe no banco de dados
    $sql = "SELECT * FROM usuarios
    where email='$email' and senha='$senha'";
    require_once("conexao.php");
    $resultado = mysqli_query($conexao, $sql);
    //mysqli_num_rows para contar o número de linhas
    //retornadas pela consulta
    if (mysqli_num_rows($resultado) > 0) {
        //mysqli_fetch_assoc para obter os dados da primeira
        //linha retornada pela consulta.
        $linha = mysqli_fetch_assoc($resultado);
        //se existir, mensagem Ok
        echo "Acesso ok.";
        $_SESSION['usuarioLogado'] = true;
        $_SESSION['idUsuario'] = $linha['id'];
        $_SESSION['nomeUsuario'] = $linha['nome'];
        $_SESSION['tipoUsuario'] = $linha['tipo'];
        header("location:dashboard.php");
    } else {
        //se não existir, mensagem ERRO
        echo "Usuário ou senha inválidos.";
    }

}
require_once("rodape.php");

?>