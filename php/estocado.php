<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ECOMMERCE_PROJECT";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Variável para armazenar a mensagem de exclusão
$delete_message = '';

// Verificar se há um pedido de exclusão
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);
    
    // Preparar e executar a exclusão
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    
    if ($stmt->execute()) {
        $delete_message = 'Produto excluído com sucesso!';
    } else {
        $delete_message = 'Ocorreu um erro ao excluir o produto.';
    }
    
    $stmt->close();
}

// Selecionar todos os produtos cadastrados
$sql = "SELECT id, nome_produto, quantidade_produto, marca_produto, peso_produto, material_produto, cor_produto, preco_venda, unidade_medida 
        FROM produtos 
        ORDER BY id DESC";
$result = $conn->query($sql);

// Exibir mensagem de exclusão se houver
if ($delete_message) {
    echo '<div id="delete-message">' . $delete_message . '</div>';
}

// Exibir produtos na tabela
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="coluna-informacao">';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['nome_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['quantidade_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['marca_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['peso_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['material_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['cor_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . number_format($row['preco_venda'], 2, ',', '.') . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['unidade_medida'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="border-right: none; width:5vw;">';
        // Botão para abrir o modal
        echo '<button class="atualizar-produto-button" data-id="' . $row['id'] . '" data-toggle="modal" data-target="#updateModal">ATUALIZAR</button>';
        echo '</div>';   
        echo '</div>';
    }
} else {
    echo '<div class="informacoes-produtos-cadastrados" colspan="8" style="width:100%; border:none;"><p>Nenhum produto cadastrado</p></div>';
}

// Fechar a conexão
$conn->close();
?>
