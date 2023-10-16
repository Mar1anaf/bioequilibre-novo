<?php
session_start();
include 'conexao.php';

$email = $_POST['username']; // nome do campo de email no form de login
$senha = md5($_POST['password']); // nome do campo de senha no form de login

$sql = "SELECT * FROM cadastro WHERE cadastro_email = '$email' AND cadastro_senha = '$senha'";

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
$_SESSION["loggedin"] = true;
    header("Location: index.php");
} else {
print"<script>alert('Email ou senha incorretos');</script>";
print"<script>location.href='login.php';</script>";
}

$conexao->close();
?>