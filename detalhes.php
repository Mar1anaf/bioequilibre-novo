<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: beige; /* Cor de fundo bege */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 800px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white; /* Cor de fundo branca para a div principal */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra para a div principal */
        }
        .thumbnails {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px; /* Espaço entre as miniaturas */
        }
        .thumbnail {
            margin-bottom: 10px;
            cursor: pointer;
        }
        .thumbnail img {
            max-width: 100%;
            height: auto;
        }
        .product-details {
            flex: 1;
            text-align: left;
            padding-left: 20px;
            padding-right: 20px;
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .large-image {
            text-align: center;
            flex: 1;
        }
        .large-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thumbnails">
            <div class="thumbnail" onclick="displayLargeImage('imagem1.jpg')">
                <img src="imagem1-thumbnail.jpg" alt="Thumbnail 1">
            </div>
            <div class="thumbnail" onclick="displayLargeImage('imagem2.jpg')">
                <img src="imagem2-thumbnail.jpg" alt="Thumbnail 2">
            </div>
            <div class="thumbnail" onclick="displayLargeImage('imagem3.jpg')">
                <img src="imagem3-thumbnail.jpg" alt="Thumbnail 3">
            </div>
        </div>
        <div class="product-details">
            <h1 class="product-title">Smartphone XYZ</h1>
            <p class="product-description">O Smartphone XYZ é um dispositivo incrível com recursos avançados. Ele possui uma tela de alta resolução, uma câmera de alta qualidade e muito mais.</p>
        </div>
        <div class="large-image" id="large-image">
            <img src="" alt="Imagem em tamanho grande">
        </div>
    </div>

    <script>
        function displayLargeImage(imageSrc) {
            var largeImage = document.getElementById("large-image");
            var largeImageElement = largeImage.querySelector("img");
            largeImageElement.src = imageSrc;
        }
    </script>
</body>
</html>