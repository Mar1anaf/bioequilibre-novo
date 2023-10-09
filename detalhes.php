<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="./css/detalhes.css">
</head>

<body>
<br>
        <header>
            <a href="./index.php" class="arrow-back">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="box-busca">
                <div class="search-box">
                    <form method="post" action="busca.php">
                        <input type="text" class="search-box-input" name="busca" placeholder="Faça sua Pesquisa">
                        <button class="search-box-button"><ion-icon class="search-icon" name="search"></ion-icon></button>
                    </form>
                </div>
                <div class="search-results">
                </div>
        </header>

    <body>
    <br>
    <div class="container">
            <?php
            include 'conexao.php';

            // Consulta SQL para selecionar o produto com base no ID (substitua o ID do produto desejado)
            $produto_id = 1; // Substitua pelo ID do produto desejado
            $sql = "SELECT * FROM produtos WHERE produto_id = $produto_id";

            // Executar a consulta
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
                echo "<img src='$produto_img1' onclick='displayMainImage(\"$produto_img1\")' width='20%'>";
                echo "<img src='$produto_img2' onclick='displayMainImage(\"$produto_img2\")'>";
                echo "</div>";

                echo "<div class='product-main-image'>";
                echo "<img src='$produto_imgproduto' alt='Imagem Principal'>";
                echo "</div>";

                echo "<div class='product-description'>";
                echo "<h1>Tamanho:</h1>";
                echo "<p>$produto_tamanho</p>";
                echo "<br><br><br>";
                echo "<div class='product-price'>$produto_preco</div>";
                echo "<div class='add-to-cart'>";
                echo "<a href='https://web.whatsapp.com/' class='buy-now-button' type='button'>Comprar agora</a>";
                echo "<a href='#' class='buy-now-button' onclick='addToCart()'><ion-icon name='cart-outline' class='cart-icon'></ion-icon>Adicionar ao carrinho</a>";
                echo "</div>";
                echo "<h1>Você sabia</h1>";
                echo "<p>$produto_descricao</p>";
                echo "</div>";


            } else {
                echo "Nenhum produto encontrado."; // Caso a tabela esteja vazia
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

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>