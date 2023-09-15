<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <script src="cadastro.js"></script>
</head>

<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="./img/logo2-removebg-preview.png" alt="Logo" class="logo" width="100%">
            <h1>Crie sua conta </h1>
        </div>
        <form class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <p>Seu nome</p>
            <input type="text" placeholder="Nome de usuário" class="input-field">
            <p>Endereço de email</p>
            <input type="email" placeholder="Endereço de email" class="input-field">
            <p>Senha</p>
            <input type="password" placeholder="Senha" class="input-field">
            <p>Data de nascimento</p>
            <input type="date" placeholder="Senha" class="input-field">
            <button type="submit" class="login-button">Continuar</button>

        </form>
        <a href="./login.php" class="href" style="color: #000000">Ja tem uma conta? login</a>
    </div>

</body>

</html>