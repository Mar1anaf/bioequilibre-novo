<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];
    // SQL para excluir o produto pelo ID
    $sql = "DELETE FROM produtos WHERE produto_id=$produto_id";
    
    if (mysqli_query($conexao, $sql)) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir o produto: " . mysqli_error($conexao);
    }
}
?>