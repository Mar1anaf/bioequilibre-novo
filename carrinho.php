<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/carrinho.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <header>
    <span>Carrinho de compras</span>
  </header>
  <main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">

      <?php
      include 'conexao.php';

      if (isset($_POST['produto_id'])) {
        $produto_id = $_POST['produto_id'];

        // Aqui você pode resgatar as informações do produto com base no ID fornecido
        $sql = "SELECT * FROM produtos WHERE produto_id = '$produto_id'";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $produto_nome = $row['produto_nome'];
          $produto_preco = $row['produto_preco'];
          $produto_imgproduto = $row['produto_imgproduto'];

          echo "<section>";
          echo "  <table>";
          echo "    <thead>";
          echo "      <tr>";
          echo "        <th>Produto</th>";
          echo "        <th>Preço</th>";
          echo "        <th>Quantidade</th>";
          echo "        <th>Total</th>";
          echo "        <th>-</th>";
          echo "      </tr>";
          echo "    </thead>";

          echo "    <tbody>";
          echo "      <tr>";
          echo "        <td>";
          echo "          <div class='product'>";
          echo "            <div><img src='" . $produto_imgproduto . "></div>";
          echo "            <div class='info'>";
          echo "              <div class='name'>" . $produto_nome . "</div>";
          echo "            </div>";
          echo "          </div>";
          echo "        </td>";
          echo "        <td>" . $produto_preco . "</td>";
          echo "        <td>";
          echo "          <div class='qty'>";
          echo "            <button><i class='bx bx-minus'></i></button>";
          echo "            <span>2</span>";
          echo "            <button><i class='bx bx-plus'></i></button>";
          echo "          </div>";
          echo "        </td>";
          echo "        <td>R$ </td>";
          echo "        <td>";
          echo "          <button class='remove'><i class='bx bx-x'></i></button>";
          echo "        </td>";
          echo "      </tr>";
          echo "    </tbody>";
          echo "  </table>";
          echo "</section>";

          echo "<aside>";
          echo "  <div class='box'>";
          echo "    <header>Resumo da compra</header>";
          echo "    <div class='info'>";
          echo "      <div><span>Sub-total</span><span>R$ </span></div>";
          echo "      <div><span>Frete</span><span>Gratuito</span></div>";
          echo "      <div>";
          echo "        <button>";
          echo "          Adicionar cupom de desconto";
          echo "          <i class='bx bx-right-arrow-alt'></i>";
          echo "        </button>";
          echo "      </div>";
          echo "    </div>";
          echo "    <footer>";
          echo "      <span>Total</span>";
          echo "      <span>R$ </span>";
          echo "    </footer>";
          echo "  </div>";
          echo "  <button>Finalizar Compra</button>";
          echo "</aside>";
          echo      "</div>";
        }
      }
      ?>
  </main>
</body>

</html>