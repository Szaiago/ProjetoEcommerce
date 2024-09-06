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
$sql = "SELECT id, nome_produto, categoria_produto, marca_produto, peso_produto, material_produto, cor_produto, preco_venda, unidade_medida 
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
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['categoria_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['marca_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['peso_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['material_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['cor_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . number_format($row['preco_venda'], 2, ',', '.') . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados"><p>' . $row['unidade_medida'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="border-right: none; width:5vw;">';
        // Formulário para excluir produto
        echo '<form action="" method="post" style="display:inline;">
                <input type="hidden" name="product_id" value="' . $row['id'] . '">
                <input type="submit" value="APAGAR" class="apagar-produto-button">
              </form>';
        echo '</div>';   
        echo '</div>';
    }
} else {
    echo '<div class="informacoes-produtos-cadastrados" colspan="8" style="width:100%; border:none;"><p>Nenhum produto cadastrado</p></div>';
}

// Fechar a conexão
$conn->close();
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selecionar a mensagem de exclusão
    const message = document.getElementById('delete-message');
    
    if (message) {
        // Configurar o tempo para a mensagem desaparecer
        setTimeout(function() {
            message.style.opacity = '0';
            setTimeout(function() {
                message.style.display = 'none';
            }, 600); // Tempo de transição
        }, 2000); // Tempo antes de desaparecer
    }
});
</script>

<style>
#delete-message {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    transition: opacity 0.6s ease-out;
}
</style>
