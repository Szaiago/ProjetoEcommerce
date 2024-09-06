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

// Query para apagar todos os produtos
$query = "DELETE FROM produtos";

// Executar a query
if ($conn->query($query) === TRUE) {
    echo 'success';
} else {
    echo 'error';
}

// Fechar a conexão
$conn->close();
?>
