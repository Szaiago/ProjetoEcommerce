// Seleciona os elementos do menu de configuração
const logoConfiguracao = document.querySelector('.logo-configuracao');
const menuConfiguracao = document.querySelector('.menu-configuracao');
const checkboxModoNoturno = document.getElementById('toggleModoNoturno');

// Inicializa o menu de configuração como escondido
menuConfiguracao.style.display = 'none';

// Alterna visibilidade do menu de configuração ao clicar na logo
logoConfiguracao.addEventListener('click', (event) => {
    if (menuConfiguracao.style.display === 'none' || menuConfiguracao.style.display === '') {
        menuConfiguracao.style.display = 'flex';
    } else {
        menuConfiguracao.style.display = 'none';
    }
});

// Fecha o menu de configuração ao clicar fora dele
document.addEventListener('click', (event) => {
    if (!menuConfiguracao.contains(event.target) && !logoConfiguracao.contains(event.target)) {
        menuConfiguracao.style.display = 'none';
    }
});

// Fecha o menu de configuração ao remover o cursor da área do menu vertical
document.querySelector('.menu-vertical').addEventListener('mouseleave', () => {
    if (!checkboxModoNoturno.checked) {
        menuConfiguracao.style.display = 'none';
    }
});

// Mantém o menu de configuração aberto se o checkbox do modo noturno estiver ativado
checkboxModoNoturno.addEventListener('change', () => {
    if (checkboxModoNoturno.checked) {
        menuConfiguracao.style.display = 'flex'; // Mostra o menu no modo noturno
    }
});

// Fecha o menu de configuração ao remover o cursor da área do menu, exceto no modo noturno
menuConfiguracao.addEventListener('mouseleave', () => {
    if (!checkboxModoNoturno.checked) {
        menuConfiguracao.style.display = 'none';
    }
});
