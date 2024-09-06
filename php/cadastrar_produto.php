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

// Verificar se a imagem foi enviada corretamente
if (isset($_FILES['img_produto']) && $_FILES['img_produto']['error'] == 0) {
    // Pegar as informações do arquivo
    $file_tmp = $_FILES['img_produto']['tmp_name'];
    $file_name = $_FILES['img_produto']['name'];
    $file_size = $_FILES['img_produto']['size'];
    $file_type = mime_content_type($file_tmp);

    // Tipos de imagem permitidos
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg', 'image/webp'];

    // Verificar se o tipo de arquivo é permitido
    if (in_array($file_type, $allowed_types)) {
        // Definir o caminho para salvar a imagem
        $upload_dir = '../uploads/';
        $file_destination = $upload_dir . basename($file_name);

        // Mover o arquivo para o diretório de uploads
        if (move_uploaded_file($file_tmp, $file_destination)) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao mover a imagem para a pasta de destino.";
        }
    } else {
        echo "Tipo de arquivo não permitido. Por favor, envie uma imagem no formato JPEG, PNG, GIF ou WEBP.";
    }
} else {
    echo "Nenhuma imagem foi enviada ou ocorreu um erro.";
}

// Preparar e executar a consulta SQL
$sql = "INSERT INTO produtos (nome_produto, categoria_produto, marca_produto, peso_produto, material_produto, cor_produto, preco_venda, unidade_medida, garantia_produto, descricao_produto, img_produto)
VALUES ('$nome_produto', '$categoria_produto', '$marca_produto', '$peso_produto', '$material_produto', '$cor_produto', '$preco_venda', '$unidade_medida', '$garantia_produto', '$descricao_produto', '$file_name')";

if ($conn->query($sql) === TRUE) {
    // Redirecionar para a página HTML com uma mensagem de sucesso
    header("Location: ../cadastro-produto.php?status=sucesso");
    exit();
} else {
    // Redirecionar para a página HTML com uma mensagem de erro
    header("Location: ../cadastro-produto.php?status=erro");
    exit();
}

// Fechar a conexão
$conn->close();
?>
