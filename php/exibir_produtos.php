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

// Selecionar os últimos 5 produtos cadastrados
$sql = "SELECT nome_produto, categoria_produto, marca_produto, peso_produto, material_produto, cor_produto, preco_venda, unidade_medida 
        FROM produtos 
        ORDER BY id DESC 
        LIMIT 5";
$result = $conn->query($sql);

// Exibir produtos na tabela
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="coluna-informacao">';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['nome_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['categoria_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['marca_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['peso_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['material_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . $row['cor_produto'] . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="width: 11.75vw;"><p>' . number_format($row['preco_venda'], 2, ',', '.') . '</p></div>';
        echo '<div class="informacoes-produtos-cadastrados" style="border-right: none; width: 11vw;"><p>' . $row['unidade_medida'] . '</p></div>';
        echo '</div>'; // Fechar a div da coluna-informacao
    }
} else {
    echo '<div class="informacoes-produtos-cadastrados" colspan="8" style="width:100%; border:none;"><p>Nenhum produto cadastrado</p></div>';
}

// Fechar a conexão
$conn->close();
?>
