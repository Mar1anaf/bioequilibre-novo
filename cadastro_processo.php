<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']); // Criptografe a senha para segurança
$datanasc = $_POST['datanasc'];

$sql = "INSERT INTO cadastro (cadastro_nome, cadastro_email, cadastro_senha, cadastro_datanasc) VALUES ('$nome', '$email', '$senha', '$datanasc')";

if ($conexao->query($sql) === TRUE) {
    header("Location: login.php"); // Redireciona para a página de login
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
?>