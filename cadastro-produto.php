<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!--Cabeçalho-->
        <title>CadastroProduto/Goshop</title>
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
    <script>
        $(document).ready(function(){
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'sucesso') {
                $("#mensagem").html("<p style='color: green;'>Produto cadastrado com sucesso!</p>").fadeIn();
            } else if (status === 'erro') {
                $("#mensagem").html("<p style='color: red;'>Erro ao cadastrar o produto. Tente novamente.</p>").fadeIn();
            }

            setTimeout(function() {
                $("#mensagem").fadeOut();
            }, 4000);
        });
    </script>
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
                    <a class="menu-subtitulo-produtos" href="cadastro-produto.php" style="color: white;">CADASTRAR</a>
                </div>
                <div class="texto-produtos">
                    <a class="menu-subtitulo-produtos" href="produtos-cadastrados.php">CADASTRADOS</a>
                </div>
            </div>
            <div class="estoque">
                <div class="titulo-estoque">
                    <p>ESTOQUE</p>
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
            <div class="modulo-base-info" style="justify-content: left; align-items: flex-start;">
                <p class="p-conteudo-site" style="border-bottom:1px solid black;">CADASTRO DE PRODUTOS</p>
            </div>
            <div id="mensagem" style="display: none; margin-bottom: 20px;"></div>
            <form class="form-cadastrar-produtos" action="php/cadastrar_produto.php" method="POST" enctype="multipart/form-data">
                <div class="adicionar-produto">
                    <div class="sub-titulo-cadastro">
                        <p>Nome do Produto:</p>
                    </div>
                    <input type="text" name="nome_produto" id="nome-produto" placeholder="Nome" required>
                    <div class="agrupar-etapas">
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 20vw;">
                                <p>Categoria:</p>
                            </div>
                            <select name="categoria_produto" id="categoria-produto" required>
                                <option>Escolher Categoira</option>
                                <option>PERIFÉRICO</option>
                                <option>COSMÉTICO</option>
                                <option>VESTUÁRIO</option>
                            </select>
                        </div>
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 24.5vw; margin-left: 10px;">
                                <p>Marca:</p>
                            </div>
                            <input type="text" name="marca_produto" id="marca-produto" placeholder="Marca" required>
                        </div>
                    </div>
                    <div class="agrupar-etapas">
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 20vw;">
                                <p>Peso:</p>
                            </div>
                            <input type="text" name="peso_produto" id="peso-produto" placeholder="Peso" required>
                        </div>
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 22vw; margin-left: 20px;">
                                <p>Material:</p>
                            </div>
                            <input type="text" name="material_produto" id="material-produto" placeholder="Material" style="margin-left: 20px;" required>
                        </div>
                    </div>
                    <div class="agrupar-etapas">
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 20vw;">
                                <p>Cor do Produto:</p>
                            </div>
                            <select name="cor_produto" id="cor-produto" required>
                                <option>Escolher Cor</option>
                                <option>PRETO</option>
                                <option>BRANCO</option>
                                <option>PRATA</option>
                                <option>AZUL</option>
                                <option>VERMELHO</option>
                                <option>VERDE</option>
                                <option>ROSA</option>
                                <option>ROXO</option>
                                <option>AMARELO</option>
                                <option>LARANJA</option>
                                <option>CINZA</option>
                                <option>CIANO</option>
                            </select>
                        </div>
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 24.5vw; margin-left: 10px;">
                                <p>Preço de Venda:</p>
                            </div>
                            <input type="text" name="preco_venda" id="preço-de-venda-produto" placeholder="Preço" required> 
                        </div>
                    </div>
                    <div class="agrupar-etapas">
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 20.5vw;">
                                <p>Unidade de Medida:</p>
                            </div>
                            <select name="unidade_medida" id="unidade-de-medida-produto" required>
                                <option>Escolher Unidade de Medida</option>
                                <option>UNIDADE</option>
                                <option>CAIXA</option>
                                <option>LITRO</option>
                                <option>QUILO</option>
                            </select>
                        </div>
                        <div class="orientar-input">
                            <div class="sub-titulo-cadastro" style="width: 22.8vw; margin-left: 15px;">
                                <p>Tempo de Garantia:</p>
                            </div>
                            <select name="garantia_produto" id="garantia-produto" required>
                                <option>Escolher Garantia</option>
                                <option>3 MESES</option>
                                <option>6 MESES</option>
                                <option>1 ANO</option>
                                <option>1,5 ANO</option>
                                <option>2 ANOS</option>
                                <option>3 ANOS</option>
                            </select>
                        </div>
                    </div>
                    <div class="sub-titulo-cadastro">
                        <p>Imagem do Produto:</p>
                    </div>
                    <div class="custom-file-upload">
                        <label for="img-produto" id="custom-file-label">Selecione uma imagem</label>
                        <input type="file" name="img_produto" id="img-produto" accept="image/*" required>
                    </div>           
                    <div class="sub-titulo-cadastro">
                        <p>Descrição do Produto:</p>
                    </div>
                    <input type="text" name="descricao_produto" id="descrição-produto" placeholder="Descrição" required>
                    <div class="agrupar-etapas">
                    <input type="submit" class="cadastrar-produtos" id="cadastrar-produtos" value="CADASTRAR">
                    </div>
                </div>
            </form>
            <div class="modulo-base-info" style="width:85vw; justify-content: left; align-items: flex-start;">
                <p class="p-conteudo-site" style="border-bottom:1px solid black;">ÚLTIMOS PRODUTOS CASTRADOS</p>
            </div>
            <div class="tabela-produtos-cadastrados">
                <div class="coluna-titulos">
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>NOME</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>CATEGORIA</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>MARCA</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>PESO</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>MATERIAL</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>COR</p></div>
                    <div class="titulos-produtos-cadastrados" style="width: 11.75vw;"><p>VALOR</p></div>
                    <div class="titulos-produtos-cadastrados" style="border-right: none; width: 11vw;"><p>MEDIDA</p></div>
                </div>
                <div class="coluna-informacoes">
                    <?php include 'php/exibir_produtos.php'; ?>
                </div>
            </div>  
            </div>
        </div>
    </body>
</html>
