<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$nome = $_POST['nome-cadastro'];
$idade = $_POST['idade-cadastro'];
$cep = $_POST['cep-cadastro'];
$email = $_POST['email-cadastro'];
$senha = $_POST['senha-cadastro'];

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuario (nome_usuario, idade_usuario, cep_usuario, email_usuario, senha_usuario) 
        VALUES ('$nome','$idade','$cep','$email','$senha')";

$stmt = $conn->query($sql);

if ($stmt) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}


$conn->close();
?>
