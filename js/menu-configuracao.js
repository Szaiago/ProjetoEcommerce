// Seleciona os elementos
const logoConfiguracao = document.querySelector('.logo-configuracao');
const menuConfiguracao = document.querySelector('.menu-configuracao');
const checkbox = document.getElementById('toggleModoNoturno');

// Alterna visibilidade do menu ao clicar na logo
logoConfiguracao.addEventListener('click', (event) => {
    event.stopPropagation(); // Impede que o clique se propague para o documento
    if (menuConfiguracao.style.display === 'none' || menuConfiguracao.style.display === '') {
        menuConfiguracao.style.display = 'flex';
    } else {
        menuConfiguracao.style.display = 'none';
    }
});

// Fecha o menu ao clicar fora dele
document.addEventListener('click', (event) => {
    if (!menuConfiguracao.contains(event.target) && !logoConfiguracao.contains(event.target)) {
        menuConfiguracao.style.display = 'none';
    }
});

// Fecha o menu ao remover o cursor da área do menu vertical
document.querySelector('.menu-vertical').addEventListener('mouseleave', () => {
    menuConfiguracao.style.display = 'none';
});

// Mantém o menu aberto se o checkbox estiver ativado, mas permite fechar com mouseleave
checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        menuConfiguracao.style.display = 'flex';
    }
});

// Fecha o menu ao remover o cursor da área do menu, mesmo no modo noturno
menuConfiguracao.addEventListener('mouseleave', () => {
    if (!checkbox.checked) { 
        menuConfiguracao.style.display = 'none';
    }
});
