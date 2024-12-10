// Função para voltar à página inicial
function goBack() {
    window.history.back();
}

// Função para calcular a média de preço por hora
document.getElementById('calculate-price').addEventListener('click', function() {
    const valor1 = parseFloat(document.getElementById('valor1').value);
    const valor2 = parseFloat(document.getElementById('valor2').value);
    const valor3 = parseFloat(document.getElementById('valor3').value);
    const valor4 = parseFloat(document.getElementById('valor4').value);
    const valor5 = parseFloat(document.getElementById('valor5').value);
    const valor6 = parseFloat(document.getElementById('valor6').value);

    // Verifica se todos os campos estão preenchidos
    if (isNaN(valor1) || isNaN(valor2) || isNaN(valor3) || isNaN(valor4) || isNaN(valor5) || isNaN(valor6)) {
        alert('Por favor, preencha todos os campos corretamente.');
        return;
    }

    // Calcula a média de preço
    const totalPrice = valor1 + valor2 + valor3 + valor4 + valor5 + valor6;
    const averagePrice = totalPrice / 6;

    // Exibe a média de preço por hora
    document.getElementById('average-price').innerHTML = `Média de Preço por Hora: <strong>R$ ${averagePrice.toFixed(2)}</strong>`;


});



