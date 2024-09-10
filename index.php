<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--Cabeçalho-->
        <title>Index/Goshop</title>
    <!---->
    <!-- Metas-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Content-Language" content="pt-BR">
        <meta name="description" content="Sistema de Ecommerce Desenvolvido pelo aluno Iago Souza">
        <meta name="keywords" content="ecommerce, produtos, vendas, online">
        <meta name="author" content="Iago Souza">
        <meta name="referrer" content="no-referrer-when-downgrade">
    <!---->
    <!-- Externos -->
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="css/responsividade.css"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!---->
    </head>
    <body>
        <div class="container-principal">
            <div class="cadastro">
                <div class="titulo-bem-vindo">
                    <p>AQUI SEUS DESEJOS SE REALIZAM</p>
                </div>
                <form class="cadastro-pessoas" action="php/cadastrar_pessoas.php" method="POST" enctype="multipart/form-data">
                    <p class>CADASTRO:</p>
                    <p>Nome:</p>
                    <input type="text" id="nome-cadastro" name="nome-cadastro" placeholder="Nome">
                    <div class="alinhas-inputs">
                        <div class="alinha-dados">
                        <p>Idade:</p>
                        <input type="text" id="idade-cadastro" name="idade-cadastro" placeholder="Idade">
                        <p>CEP:</p>
                        <input type="text" id="cep-cadastro" name="cep-cadastro" placeholder="00000-000" style="margin-left: 10px;">
                    </div>
                    <p>Email:</p>
                    <input type="text" id="email-cadastro"  name="email-cadastro" placeholder="Email" style="margin-top: 0px;">
                    <p>Senha:</p>
                    <input type="password" id="senha-cadastro" name="senha-cadastro" placeholder="Senha">
                    <input type="submit" id="concluir-cadastro" value="CADASTRAR">
                </form>
            </div>
        </div>
    </body>
</html>
