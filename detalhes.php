<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="./css/detalhes.css">
    <!-- Adicione as linhas do Slick Carousel CSS aqui -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    <br>
    <header>
    <div class="seta">
        <a href="index.php" class="arrow-back" style="position: absolute; top: 20px; left: 20px; color: #78b159;">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
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
    </header>

    <body>
        <br>
        <div class="container">
            <?php
            include 'conexao.php';

            if (isset($_GET['id'])) {
                $produto_id = $_GET['id'];
                $sql = "SELECT * FROM produtos WHERE produto_id = $produto_id";
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $produto_nome = $row['produto_nome'];
                    $produto_img1 = $row['produto_img1'];
                    $produto_img2 = $row['produto_img2'];
                    $produto_imgproduto = $row['produto_imgproduto'];
                    $produto_tamanho = $row['produto_tamanho'];
                    $produto_descricao = $row['produto_descricao'];
                    $produto_preco = $row['produto_preco'];

                    // Exibir informações do produto
                    echo "<div class='product-name'><h1>$produto_nome</h1></div>";

                    echo "<div class='product-images'>";
                    echo "<div class='slider'>";
                    echo "<div><img src='$produto_img1' alt='Imagem 1'></div>";
                    echo "<div><img src='$produto_img2' alt='Imagem 2'></div>";
                    // Adicione mais imagens conforme necessário
                    echo "</div>";
                    echo "<button class='prev'>Anterior</button>";
                    echo "<button class='next'>Próximo</button>";
                    echo "</div>";

                    echo "<div class='product-main-image'>";
                    echo "<img src='$produto_imgproduto' alt='Imagem Principal'>";
                    echo "</div>";
                    echo "<div class='product-price'>$produto_preco</div>";

                    echo "<div class='product-description'>";
                    echo "<h1>Tamanho:</h1>";
                    echo "<p>$produto_tamanho</p>";
                    echo "<br><br><br>";
                    echo "<div class='add-to-cart' style='text-align: center; margin-top: 10%;'>";
                    echo "<a href='https://web.whatsapp.com/' class='buy-now-button' type='button'>Comprar agora</a>";

                    // Adicionando um botão/formulário para adicionar ao carrinho
                    echo "<form action='carrinho.php' method='POST'>";
                    echo "<input type='hidden' name='produto_id' value='$produto_id'>";
                    echo "<button type='submit' class='add-to-cart-button' onclick='addToCart()'>Adicionar ao Carrinho</button>";
                    echo "</form>";

                    echo "</div>";
                    echo "</div>";

                    echo "</div>";
                    echo "<br><br>";
                    echo "<h1>Você sabia</h1>";
                    echo "<p>$produto_descricao</p>";
                    echo "</div>";
                } else {
                    echo "Nenhum produto encontrado.";
                }
            } else {
                echo "Nenhum produto encontrado.";
            }
            // Fechar a conexão com o banco de dados
            $conexao->close();
            ?>
        </div>

        <br>

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

        <script>
            var cartCount = 0;

            function displayMainImage(imageSrc) {
                var mainImage = document.querySelector(".product-main-image img");
                mainImage.src = imageSrc;
            }

            function addToCart() {
                cartCount++;
                var cartCountElement = document.getElementById("cart-count");
                cartCountElement.innerText = cartCount;
            }
        </script>

        <!-- Adicione o script do Slick Carousel aqui -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.slider').slick({
                    prevArrow: $('.prev'),
                    nextArrow: $('.next')
                });
            });
        </script>
        <!-- Certifique-se de que jQuery seja incluído antes deste script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

</html>