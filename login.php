<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..//bioequilibre-site/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="..//bioequilibre-site/js/login.js"></script>
</head>

<body>
    <div class="seta">
        <a href="redirecionar.php" class="arrow-back" style="position: absolute; top: 20px; left: 20px; color: #78b159;">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="login-container">
        <div class="logo-container">
            <img src="..//bioequilibre-site/img/logo2-removebg-preview.png" alt="Logo" class="logo" width="100%">
            <h1>Bem vindo de volta</h1>
        </div>
        <form class="login-form" action="login_processo.php" method="post">
            <label for="username">Endereço de email</label>
            <input type="text" id="username" name="username" placeholder="Endereço de email" class="input-field">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Senha" class="input-field">
            <input type="submit" class="login-button" value="Continuar">

        </form>
        <a href="./cadastro.php" class="href" style="color: #000000">Não tem uma conta? Cadastre-se</a>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-BR">