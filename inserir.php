<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenha os dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $tamanho = $_POST['tamanho'];
    $vocesabia = $_POST['vocesabia'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $imgproduto = $_POST['imgproduto'];


    // Adicione aqui os outros campos

    // SQL para inserir o produto no banco de dados
    $sql = "INSERT INTO produtos (produto_nome, produto_preco, produto_tamanho, produto_vocesabia, produto_img1, produto_img2, produto_imgproduto) VALUES ('$nome', '$preco', '$tamanho', '$vocesabia','$img1', '$img2', '$imgproduto')";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir o produto: " . mysqli_error($conexao);
    }
}
?>

