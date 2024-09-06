<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--Cabeçalho-->
        <title>ProdutosCadastrados/Goshop</title>
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
        <link rel="stylesheet" href="css/cadastrar-produto.css"/>
        <link id="base-stylesheet" rel="stylesheet" href="css/base.css"/>
        <link id="nightmode-stylesheet" rel="stylesheet" href="css/modonoturno.css" disabled/>
        <link rel="stylesheet" href="css/responsividade.css"/>
        <script src="js/menu-produtos.js" defer></script>
        <script src="js/menu-configuracao.js" defer></script>
        <script src="js/modonoturno.js" defer></script>
        <script src="js/dropdown-ajuda.js" defer></script>
        <script src="js/dropdown-responsivo.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!---->
    </head>
    <body>
        <div class="menu-vertical">
            <div class="logo">
                <a href="https://sc.senai.br/"><div class="logo-senai"></div></a>
                <div class="logo-empresa"></div>
            </div>
            <div class="perfil">
                <div class="titulo-vertical">
                    <p>PERFIL</p>
                </div>
                <a href="perfil.html"><div class="logo-perfil"></div></a>
            </div>
            <div class="sobrenos">
                <div class="titulo-sobrenos">
                    <p>QUEM SOMOS?</p>
                </div>
                <a href="quemsomos.html"><div class="logo-sobrenos"></div></a>
            </div>
            <div class="produtos">
                <div class="titulo-produtos">
                    <p>PRODUTOS</p>
                </div>
                <div class="logo-produtos"></div>
            </div>
            <div class="menu-produtos" style="display: none;">
                <div class="aviso-menu-produtos">
                    <div class="seta-baixo"></div>
                </div>
                <div class="texto-produtos">
                    <a class="menu-subtitulo-produtos" href="cadastro-produto.php">CADASTRAR</a>
                </div>
                <div class="texto-produtos">
                    <a class="menu-subtitulo-produtos" href="produtos-cadastrados.php" style="color: white;">CADASTRADOS</a>
                </div>
            </div>
            <div class="configuracao">
                <div class="titulo-configuracao">
                    <p>CONFIGURAÇÃO</p>
                </div>
                <div class="logo-configuracao"></div>
            </div>
            <div class="menu-configuracao" style="display: none;">
                <div class="aviso-menu-configuracao">
                    <div class="seta-baixo"></div>
                </div>
                <div class="texto-configuracao">
                    <p>MODO NOTURNO:</p>
                </div>
                <div class="container-ativar-e-desativar-modo-noturno">
                    <label class="switch">
                        <input type="checkbox" id="toggleModoNoturno">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="container-principal">
            <div class="menu-horizontal">
                <div class="menu-responsividade">
                    <button class="hamburguer-btn" onclick="toggleDropdown()">☰</button>
                    <div id="dropdown" class="dropdown-content">
                        <a href="perfil.html">PERFIL</a>
                        <a href="quemsomos.html">QUEM SOMOS?</a>
                        <a href="configuracao.html">CONFIGURAÇÕES</a>
                    </div>
                </div>
                <div class="preenchimento-menu"></div>
                <div class="logo-menuhorizontal">
                    <div class="logo-detalhe"></div>
                </div>
                <div class="ajuda-menuhorizontal">
                    <div class="ajuda-logo"></div>
                    <div class="contenteudo-ajuda">
                        <p>ADICIONAR INFOS AQUI:</p>
                    </div>
                </div>
            </div>
            <div class="base-info">
            <div class="modulo-base-info" style="width:85vw; justify-content: left; align-items: flex-start;">
                <p class="p-conteudo-site" style="border-bottom:1px solid black;">PRODUTOS CADASTRADOS</p>
            </div>
            <form id="clearTableForm" action="php/clear-table.php" method="post">
                    <input type="submit" value="APAGAR TUDO" class="apagar-produtos-button"/>
            </form>
            <div id="confirmModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Tem certeza de que deseja apagar todos os produtos?</p>
                    <div class="modal-buttons">
                        <button id="confirmDelete" class="apagar-produtos-button">Confirmar</button>
                        <button id="cancelDelete" class="apagar-produtos-button">Cancelar</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="tabela-produtos-cadastrados" style="position: relative; left: -8vw; top:-35vh;">
                <div class="coluna-titulos">
                    <div class="titulos-produtos-cadastrados"><p>NOME</p></div>
                    <div class="titulos-produtos-cadastrados"><p>CATEGORIA</p></div>
                    <div class="titulos-produtos-cadastrados"><p>MARCA</p></div>
                    <div class="titulos-produtos-cadastrados"><p>PESO</p></div>
                    <div class="titulos-produtos-cadastrados"><p>MATERIAL</p></div>
                    <div class="titulos-produtos-cadastrados"><p>COR</p></div>
                    <div class="titulos-produtos-cadastrados"><p>VALOR</p></div>
                    <div class="titulos-produtos-cadastrados"><p>MEDIDA</p></div>
                    <div class="titulos-produtos-cadastrados" style="border-right: none; width:5vw;"><p>DELETAR</p></div>
                </div>
                <div class="coluna-informacoes">
                    <?php include 'php/mostrar-todos-produtos-cadastrados.php'; ?>
                </div>
            </div>  
            </div>
        </div>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.apagar-produtos-button').addEventListener('click', function(event) {
                event.preventDefault();
                if (confirm('Tem certeza de que deseja apagar todos os produtos?')) {
                    fetch('php/clear-table.php', {
                        method: 'POST'
                    })
                    .then(response => response.text())
                    .then(data => {
                        if (data === 'success') {
                            alert('Tabela limpa com sucesso!');
                            location.reload(); // Recarrega a página para atualizar a lista de produtos
                        } else {
                            alert('Ocorreu um erro ao tentar limpar a tabela.');
                        }
                    })
                    .catch(error => {
                        alert('Ocorreu um erro: ' + error.message);
                    });
                }
            });
        });
    </script>
</html>
