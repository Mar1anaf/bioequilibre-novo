<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/redirecionar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>BioÉquilibre</title>
</head>

<body>
    <div class="seta">
        <a href="index.php" class="arrow-back" style="position: absolute; top: 20px; left: 20px; color: #78b159;">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="container">
        <p>Mudamos o <span class="typed-text"></span><span class="cursor">&nbsp;</span>, com um <br>produto de cada vez</p>
    </div>


    <div class="login-container">
        <img class="imagem-bioe" src="../bioequilibre-site/img/logo2-removebg-preview.png">

        <form id="loginForm" action="../bioequilibre-site/login.php" method="post">
            <h3 id="typingEffect">Comece aqui</h3>
            <div class="btn">
                <a href="./login.php" type="submit" class="btn-redirecionar">Faça login</a>
                <a href="./cadastro.php" type="submit" class="btn-redirecionar">Cadastre-se</a>
            </div>
        </form>
    </div>

    <script src="../bioequilibre-site/js/redirecionar.js"></script>
</body>

</html>