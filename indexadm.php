<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pagina-inicial.css">
    <script src="./js/pagina-inicial.js"></script>
    <title>BioÉquilibre</title>
</head>

<body>

<header>
    <nav>
        <img class="logo" src="./img/logo2-removebg-preview.png">
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="./redirecionar.php"><ion-icon name="person-circle-outline"></ion-icon>Entrar</a></li>
            <li><a href="#"><ion-icon name="cart-outline"></ion-icon>Carrinho</a></li>
        </ul>
    </nav>
</header>

<section class="home">
    <div class="home-content">
        <h1>Oi, somos BioÉquilibre!</h1>
        <h3>A maior empresa de venda de embalagens sustentáveis e ecológicas.</h3>
        <p>Quando escolhemos caixas ecológicas, não estamos apenas optando por um produto,
            estamos tomando uma decisão consciente de priorizar a saúde do nosso planeta,
            proteger os recursos naturais para as gerações futuras e fazer a diferença na
            luta contra a degradação ambiental. Faça uma escolha que o futuro agradecerá.</p>
        <div class="btn-box">
            <a href="#produtos">Ir para produtos</a>
        </div>
    </div>
</section>

<div class="products-class">

    <h1 id="produtos">Produtos</h1>

    <div class="box-busca">
        <div class="search-box">
            <form method="post" action="busca.php">
                <input type="text" class="search-box-input" name="busca" placeholder="Faça sua Pesquisa">
                <button class="search-box-button"><ion-icon class="search-icon" name="search"></ion-icon></button>
            </form>
        </div>
        <div class="search-results">
         </div>
    </div>

    <section class="products">
        <div class="all-products">
        <?php
            $sql = "SELECT * FROM produtos"; // Consulta SQL para selecionar todos os registros da tabela 'produtos'
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Aqui, você pode acessar os campos da tabela usando $row['nome_do_campo']
                    $produto_id = $row['produto_id'];
                    $produto_nome = $row['produto_nome'];
                    $produto_preco = $row['produto_preco'];
                    $produto_imgproduto = $row['produto_imgproduto'];
                    // Exiba os dados na sua estrutura HTML
                    echo "<div class='product'>";
                    echo "<img src='$produto_imgproduto'>";
                    echo "<div class='product-info' id='produto_$produto_id'>";
                    echo "<h4 class='product-title'>$produto_nome</h4>";
                    echo "<p class='product-price'>R$$produto_preco</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Nenhum produto encontrado."; // Caso a tabela esteja vazia
            }
            ?>
    </div>
    </section>

<div class="footer">
    <br>
    <a href="https://www.facebook.com/?locale=pt_BR"><ion-icon class="facebook" name="logo-facebook"></ion-icon></a>
    <a href="https://www.instagram.com/explore/"><ion-icon class="instagram" name="logo-instagram"></ion-icon></a>
    <a href="https://br.pinterest.com/pinterestbr/"><ion-icon class="pinterest" name="logo-pinterest"></ion-icon></a>
    <a href="https://www.youtube.com/"><ion-icon class="linkedin" name="logo-linkedin"></ion-icon></a>
    <a href="https://br.linkedin.com/"><ion-icon class="youtube" name="logo-youtube"></ion-icon></a>
    <p>Al. Rio Negro, 750 - Alphaville</p>
    <p>06453034 Barueri, Brasil.</p>
    <p>© 2023 BioÉquilibre.</p>
    <p>Todos os direitos reservados.</p>
    <br>
</div>

<!-- qqr coisa -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
