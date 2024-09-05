document.getElementById('toggleModoNoturno').addEventListener('change', function() {
    // Seleciona o elemento <link> responsável pelo estilo atual
    const linkEstilo = document.getElementById('estilo-atual');

    // Adiciona um atraso de 2 segundos antes de trocar o CSS
    setTimeout(() => {
        if (this.checked) {
            // Se o checkbox estiver marcado, altera para o modo noturno
            linkEstilo.href = 'css/modonoturno.css';
        } else {
            // Caso contrário, volta para o estilo padrão
            linkEstilo.href = 'css/base.css';
        }
    }, 1000); // 2000 milissegundos = 2 segundos
});

document.getElementById('toggleModoNoturno').addEventListener('change', function() {
    const baseStylesheet = document.getElementById('base-stylesheet');
    const nightModeStylesheet = document.getElementById('nightmode-stylesheet');

    // Adiciona um atraso de 2 segundos antes de trocar o CSS
    setTimeout(() => {
        if (this.checked) {
            // Desativa o base.css e ativa o modonoturno.css
            baseStylesheet.disabled = true;
            nightModeStylesheet.disabled = false;
        } else {
            // Ativa o base.css e desativa o modonoturno.css
            baseStylesheet.disabled = false;
            nightModeStylesheet.disabled = true;
        }
    }, 1000);
});
