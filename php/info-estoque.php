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

// Inicializar variáveis para somas
$total_quantity = 0;
$total_weight = 0;
$total_value = 0;

// Selecionar todos os produtos cadastrados
$sql = "SELECT quantidade_produto, peso_produto, preco_venda 
        FROM produtos";
$result = $conn->query($sql);

// Somar as quantidades, pesos e valores
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $quantity = $row['quantidade_produto'];
        $weight = $row['peso_produto'];
        $value = $row['preco_venda'];

        $total_quantity += $quantity;
        $total_weight += $quantity * $weight;
        $total_value += $quantity * $value;
    }
}

// Formatar os valores com separador de milhar e duas casas decimais
$total_quantity_formatted = number_format($total_quantity, 0, ',', '.');
$total_weight_formatted = number_format($total_weight, 2, ',', '.');
$total_value_formatted = number_format($total_value, 2, ',', '.');

// Exibir as somas na tabela
echo '<div class="coluna-informacao">';
echo '<div class="informacoes-produtos-cadastrados" style="border-bottom:none;"><p>' . $total_quantity_formatted . '</p></div>';
echo '<div class="informacoes-produtos-cadastrados" style="border-bottom:none;"><p>' . $total_weight_formatted . '</p></div>';
echo '<div class="informacoes-produtos-cadastrados" style="border-bottom:none; border-right: none;"><p>' . $total_value_formatted . '</p></div>';
echo '</div>';

// Fechar a conexão
$conn->close();
?>
