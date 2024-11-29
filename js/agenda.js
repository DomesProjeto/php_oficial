// Função para adicionar horário
function adicionarHorario(dia) {
    const horario = prompt("Digite o horário para " + dia + " no formato hh:mm:");
    const regex = /^(2[0-3]|[01]?[0-9]):([0-5][0-9])$/; // Regex para validar horas e minutos válidos

    if (horario && regex.test(horario)) {
        // Requisição ao servidor para adicionar o horário
        fetch('adicionar_horario.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ dia, horario })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload(); // Recarrega a página para atualizar os horários
            } else {
                alert("Erro ao adicionar horário: " + data.message);
            }
        })
        .catch(error => alert('Erro na requisição: ' + error));
    } else {
        alert("Formato de horário inválido! Por favor, insira um horário válido no formato hh:mm (Ex: 14:30).");
    }
}


// Função para remover horário
function removerHorario(dia, horario) {
    if (confirm("Deseja remover o horário " + horario + " de " + dia + "?")) {
        fetch('remover_horario.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ dia, horario })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload(); // Recarrega a página para atualizar os horários
            } else {
                alert("Erro ao remover horário: " + data.message);
            }
        })
        .catch(error => alert('Erro na requisição: ' + error));
    }
}
