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

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_id']) && isset($_POST['quantity']) && isset($_POST['action'])) {
    $update_id = intval($_POST['update_id']);
    $quantity = intval($_POST['quantity']);
    $action = $_POST['action'];

    // Verificar a ação e atualizar a quantidade
    if ($action === 'add') {
        $stmt = $conn->prepare("UPDATE produtos SET quantidade_produto = quantidade_produto + ? WHERE id = ?");
        $stmt->bind_param("ii", $quantity, $update_id);
    } elseif ($action === 'reduce') {
        $stmt = $conn->prepare("UPDATE produtos SET quantidade_produto = GREATEST(0, quantidade_produto - ?) WHERE id = ?");
        $stmt->bind_param("ii", $quantity, $update_id);
    } else {
        echo 'Ação inválida.';
        exit;
    }

    if ($stmt->execute()) {
        echo 'Quantidade atualizada com sucesso!';
    } else {
        echo 'Ocorreu um erro ao atualizar a quantidade.';
    }
    
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
