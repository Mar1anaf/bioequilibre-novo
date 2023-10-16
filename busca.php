<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["busca"];
    $sql = "SELECT * FROM produtos WHERE produto_nome LIKE '%$search%'";
    $result = $conexao->query($sql);
}
?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/pagina-inicial.css">
        <script src="./js/pagina-inicial.js" defer></script>
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
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<ion-icon name="person"></ion-icon>';
                    echo '<a href="logout.php">Sair</a>';
                    session_destroy();
                } else {
                    echo '<ion-icon name="person"></ion-icon>';
                    echo '<a href="redirecionar.php">Entrar</a>';
                }
                ?>
                
                <?php
                echo "<a href='carrinho.php' class='add-to-cart-button' onclick='addToCart()'><ion-icon name='cart-outline' class='cart-icon'></ion-icon>Carrinho</a>";
                echo "<span id='cart-count'>0</span>";
                echo "</div>";
                ?>
            </ul>
            </nav>
        </header>
        <div class="products-class">

            <h1 id="produtos">Produtos</h1>

            <div class="box-busca">
                <div class="search-box">
                    <form method="post" action="">
                        <input type="text" class="search-box-input" name="busca" placeholder="Faça sua Pesquisa">
                        <button class="search-box-button"><ion-icon class="search-icon" name="search"></ion-icon></button>
                    </form>
                </div>
                <div class="search-results">

                    <section class="products">
                        <div class="all-products">
                        <?php
                            if (isset($result) && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $produto_id = $row['produto_id'];
                                    $produto_nome = $row['produto_nome'];
                                    $produto_preco = $row['produto_preco'];
                                    $produto_imgproduto = $row['produto_imgproduto'];

                                    echo "<div class='product'>";
                                    echo "<img src='$produto_imgproduto'>";
                                    echo "<div class='product-info' id='produto_$produto_id'>";
                                    echo "<h4 class='product-title'>$produto_nome</h4>";
                                    echo "<p class='product-price'>R$$produto_preco</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo "Nenhum produto encontrado."; // Caso nenhum resultado seja encontrado
                            }
                            ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>

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


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    </html>