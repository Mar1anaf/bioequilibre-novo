<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Seu código HTML para o formulário de inserção aqui -->
</head>
<body>
    <form method="POST" action="inserir_produto.php">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required><br>
        
        <label for="preco">Preço:</label>
        <input type="text" name="preco" required><br>
        
        <label for="preco">Tamanho:</label>
        <input type="text" name="tamanho" required><br>

        <label for="preco">Você Sabia:</label>
        <input type="text" name="vocesabia" required><br>

        
        <input type="submit" value="Salvar">
    </form>
</body>
</html>

<style>
/* Reset de estilos para garantir uma aparência consistente */
* {
    margin-top: 3%;
    box-sizing: border-box;
}

/* Estilos gerais */
body {
    font-family: 'Poppins', sans-serif;
    background-color: black;
    color: #ededed;
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

label {
    display: block;
    font-size: 18px;
    margin-bottom: 10px;
    color: #fff;
    font-weight: semi bold;

}

input[type="text"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #d8d5a7;
    border-radius: 20px;
    margin-bottom: 20px;
    background-color: #d8d5a7;
    color: #333;
}

input[type="submit"] {
    background-color: #78b159;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    width: 70%;
}

input[type="submit"]:hover {
    background-color: #2d7e1d;
}

</style>

<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $tamanho = $_POST['tamanho'];
    $vocesabia = $_POST['vocesabia'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $imgproduto = $_POST['imgproduto'];
    // Adicione aqui os outros campos

    // SQL para atualizar o produto no banco de dados
    $sql = "UPDATE produtos SET produto_nome='$nome', produto_preco='$preco', produto_tamanho='$tamanho', produto_vocesabia='$vocesabia', produto_img1='$img1', produto_img2='$img2', produto_imgproduto='$imgproduto' WHERE produto_id=$produto_id";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o produto: " . mysqli_error($conexao);
    }
}

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];
    // SQL para obter os dados do produto pelo ID
    $sql = "SELECT * FROM produtos WHERE produto_id=$produto_id";
    $resultado = mysqli_query($conexao, $sql);
    $produto = mysqli_fetch_assoc($resultado);
}
?>
