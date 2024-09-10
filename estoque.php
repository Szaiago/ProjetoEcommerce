<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--Cabeçalho-->
        <title>Estoque/Goshop</title>
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
        <link rel="stylesheet" href="css/estoque.css"/>
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
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('customModal');
    var span = document.querySelector('.close');

    document.querySelectorAll('.atualizar-produto-button').forEach(function(button) {
        button.addEventListener('click', function() {
            modal.style.display = 'flex';
        });
    });

    span.onclick = function() {
        modal.style.display = 'none';
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
});
</script>

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
                    <a class="menu-subtitulo-produtos" href="produtos-cadastrados.php">CADASTRADOS</a>
                </div>
            </div>
            <div class="estoque">
                <div class="titulo-estoque">
                    <p style="color: white;">ESTOQUE</p>
                </div>
                <a href="estoque.php"><div class="logo-estoque"></div></a>
            </div>
            <div class="publicados">
                <div class="titulo-publicados">
                    <p>PUBLICADOS</p>
                </div>
                <a href="publicados.php"><div class="logo-publicados"></div></a>
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
                <p class="p-conteudo-site" style="border-bottom:1px solid black;">ESTOQUE:</p>
                <div class="tabela-dados-estoque">
                    <div class="coluna-titulos">
                    <div class="titulos-produtos-cadastrados"><p>QUANTIDADE</p></div>
                    <div class="titulos-produtos-cadastrados"><p>PESO</p></div>
                    <div class="titulos-produtos-cadastrados" style="border-right: none;"><p>VALOR</p></div>
                    </div>
                    <div class="coluna-informacoes">
                    <?php include 'php/info-estoque.php'; ?>
                </div>
                </div>
            </div>
            <div id="message" style="display:none; position:relative; top:-1vh; padding:10px; border-radius:5px; color:white;"></div>
            <div class="tabela-produtos-cadastrados" style="position: relative; left: -0.1vw; top:0vh;">
                <div class="coluna-titulos">
                    <div class="titulos-produtos-cadastrados"><p>NOME</p></div>
                    <div class="titulos-produtos-cadastrados"><p>QUANTIDADE</p></div>
                    <div class="titulos-produtos-cadastrados"><p>MARCA</p></div>
                    <div class="titulos-produtos-cadastrados"><p>PESO</p></div>
                    <div class="titulos-produtos-cadastrados"><p>MATERIAL</p></div>
                    <div class="titulos-produtos-cadastrados"><p>COR</p></div>
                    <div class="titulos-produtos-cadastrados"><p>VALOR</p></div>
                    <div class="titulos-produtos-cadastrados"><p>UNIDADE DE MEDIDA</p></div>
                    <div class="titulos-produtos-cadastrados" style="border-right: none; width:5vw;"><p>ATUALIZAR</p></div>
                </div>
                <div class="coluna-informacoes">
                    <?php include 'php/estocado.php'; ?>
                </div>
            </div>
        </div>
        <div id="customModal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>ATUALIZAR A QUANTIDADE:</p>
                <input type="text" class="atualizar-quantidade-produto" id="atualizar-quantidade-produto" placeholder="Quantidade para atualizar" required>
                <div class="alinhar-buttons-apagar-ou-adicionar">
                    <input type="submit" class="adicionar-button" id="adicionar-button" value="ADICIONAR">
                    <input type="submit" class="reduzir-button" id="reduzir-button" value="REDUZIR">
                </div>
            </div>
        </div>
    </body>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('customModal');
    var span = document.querySelector('.close');
    var addButton = document.getElementById('adicionar-button');
    var reduceButton = document.getElementById('reduzir-button');
    var quantityInput = document.getElementById('atualizar-quantidade-produto');

    document.querySelectorAll('.atualizar-produto-button').forEach(function(button) {
        button.addEventListener('click', function() {
            modal.style.display = 'flex';
            modal.setAttribute('data-id', button.getAttribute('data-id'));
        });
    });

    span.onclick = function() {
        modal.style.display = 'none';
        quantityInput.value = '';
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
            quantityInput.value = '';
        }
    };

    addButton.addEventListener('click', function() {
        var productId = modal.getAttribute('data-id');
        var quantity = quantityInput.value;

        $.post('php/adicionar-ou-reduzir-quantidade.php', {
            update_id: productId,
            quantity: quantity,
            action: 'add'
        }, function(response) {
            alert('Quantidade alterada com sucesso!');
            modal.style.display = 'none';
            quantityInput.value = '';
            location.reload();
        }).fail(function() {
            alert('Não foi possível alterar a quantidade.');
        });
    });

    reduceButton.addEventListener('click', function() {
        var productId = modal.getAttribute('data-id');
        var quantity = quantityInput.value;

        $.post('php/adicionar-ou-reduzir-quantidade.php', {
            update_id: productId,
            quantity: quantity,
            action: 'reduce'
        }, function(response) {
            alert('Quantidade alterada com sucesso!');
            modal.style.display = 'none';
            quantityInput.value = '';
            location.reload();
        }).fail(function() {
            alert('Não foi possível alterar a quantidade.');
        });
    });
});

</script>
</html>
