<?php
// Conectar ao banco de dados
$servername = "localhost"; // Ou use o IP do servidor
$username = "root"; // Usuário do MySQL
$password = ""; // Senha do MySQL
$dbname = "ECOMMERCE_PROJECT";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$nome_produto = $_POST['nome_produto'];
$categoria_produto = $_POST['categoria_produto'];
$marca_produto = $_POST['marca_produto'];
$peso_produto = $_POST['peso_produto'];
$material_produto = $_POST['material_produto'];
$cor_produto = $_POST['cor_produto'];
$preco_venda = $_POST['preco_venda'];
$unidade_medida = $_POST['unidade_medida'];
$garantia_produto = $_POST['garantia_produto'];
$descricao_produto = $_POST['descricao_produto'];

// Preparar e executar a consulta SQL
$sql = "INSERT INTO produtos (nome_produto, categoria_produto, marca_produto, peso_produto, material_produto, cor_produto, preco_venda, unidade_medida, garantia_produto, descricao_produto)
VALUES ('$nome_produto', '$categoria_produto', '$marca_produto', '$peso_produto', '$material_produto', '$cor_produto', '$preco_venda', '$unidade_medida', '$garantia_produto', '$descricao_produto')";

if ($conn->query($sql) === TRUE) {
    // Redirecionar para a página HTML com uma mensagem de sucesso
    header("Location: ../cadastro-produto.html?status=sucesso");
    exit();
} else {
    // Redirecionar para a página HTML com uma mensagem de erro
    header("Location: ../cadastro-produto.html?status=erro");
    exit();
}

// Fechar a conexão
$conn->close();
?>
