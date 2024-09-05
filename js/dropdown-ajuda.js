document.querySelector('.ajuda-logo').addEventListener('click', function() {
    const modal = document.querySelector('.contenteudo-ajuda');
    
    // Verifica o estado atual do display e alterna entre flex e none
    if (modal.style.display === 'none' || modal.style.display === '') {
        modal.style.display = 'flex';
    } else {
        modal.style.display = 'none';
    }
});