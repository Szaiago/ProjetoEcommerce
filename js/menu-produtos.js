// Seleciona os elementos do menu de produtos
const logoProdutos = document.querySelector('.logo-produtos');
const menuProdutos = document.querySelector('.menu-produtos');

// Alterna visibilidade do menu de produtos ao clicar na logo
logoProdutos.addEventListener('click', (event) => {
    event.stopPropagation(); // Impede que o clique se propague para o documento
    if (menuProdutos.style.display === 'none' || menuProdutos.style.display === '') {
        menuProdutos.style.display = 'flex';
    } else {
        menuProdutos.style.display = 'none';
    }
});

// Fecha o menu de produtos ao clicar fora dele
document.addEventListener('click', (event) => {
    if (!menuProdutos.contains(event.target) && !logoProdutos.contains(event.target)) {
        menuProdutos.style.display = 'none';
    }
});

// Fecha o menu de produtos ao remover o cursor da área do menu vertical
document.querySelector('.menu-vertical').addEventListener('mouseleave', () => {
    menuProdutos.style.display = 'none';
});
