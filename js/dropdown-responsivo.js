
            function toggleDropdown() {
                document.getElementById("dropdown").classList.toggle("show");
            }

            // Fechar o dropdown se o usuário clicar fora do botão
            window.onclick = function(event) {
                if (!event.target.matches('.hamburguer-btn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }