<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="./js/cadastro.js"></script>
</head>

<body>
    <div class="seta">
        <a href="redirecionar.php" class="arrow-back" style="position: absolute; top: 20px; left: 20px; color: #78b159;">
            <i class="fas fa-arrow-left"></i>
        </a>    
    </div>
    
    <div class="login-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="logo-container">
            <img src="./img/logo2-removebg-preview.png" alt="Logo" class="logo" width="100%">
            <h1>Crie sua conta </h1>
        </div>
        <form class="login-form" method="post" action="cadastro_processo.php" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <p>Seu nome</p>
            <input type="text" name="nome" placeholder="Nome de usuário" class="input-field" style="margin-top:-2%">
            <p>Endereço de email</p>
            <input type="email" name="email" placeholder="Endereço de email" class="input-field" style="margin-top:-2%">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Senha" class="input-field" style="margin-top:-2%">
            <p>Data de nascimento</p>
            <input type="date" name="datanasc" placeholder="Senha" class="input-field" style="margin-top:-2%">
            <button type="submit" class="login-button">Continuar</button>

        </form>
        <a href="./login.php" class="href" style="color: #000000">Ja tem uma conta? login</a>
    </div>

</body>

</html>