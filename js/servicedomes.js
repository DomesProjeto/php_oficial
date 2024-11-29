document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todas as perguntas frequentes (FAQ)
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const answer = button.nextElementSibling; // Seleciona a resposta associada
            const isVisible = answer.classList.contains('visible');

            // Alterna a visibilidade da resposta
            if (isVisible) {
                answer.classList.remove('visible');
                button.setAttribute('aria-expanded', 'false'); // Atualiza para acessibilidade
                answer.setAttribute('aria-hidden', 'true'); // Esconde a resposta para leitores de tela
            } else {
                answer.classList.add('visible');
                button.setAttribute('aria-expanded', 'true');
                answer.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
