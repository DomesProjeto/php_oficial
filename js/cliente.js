// Função para voltar para a página principal
function goBack() {
    window.history.back();
}

// Função para obter o dia da semana, a data e a hora atual
function getCurrentTime() {
    const now = new Date();
    const dayNames = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
    const day = dayNames[now.getDay()]; // Obtém o nome do dia atual
    const date = now.getDate(); // Dia do mês
    const month = monthNames[now.getMonth()]; // Mês
    const year = now.getFullYear(); // Ano
    const hour = String(now.getHours()).padStart(2, '0');
    const minute = String(now.getMinutes()).padStart(2, '0');
    const second = String(now.getSeconds()).padStart(2, '0');

    // Formatação completa: Dia da semana - Data completa - Hora
    const time = `${day}, ${date} de ${month} de ${year} - ${hour}:${minute}:${second}`;
    
    // Atualiza o conteúdo do elemento com o tempo completo (dia, data e hora)
    document.getElementById('current-time').textContent = time;
}

// Chama a função getCurrentTime a cada segundo
setInterval(getCurrentTime, 1000);

// Dados dos clientes
const clients = [
    {
        nome: "João Silva",
        servico: "Limpeza de Jardim",
        endereco: "Rua das Flores, 123",
        horario: "10:00",
        telefone: "(27) 99999-9999",
        valor: "150,00",
        dia: "Segunda-feira"
    },
    {
        nome: "Maria Oliveira",
        servico: "Instalação Elétrica",
        endereco: "Avenida Central, 456",
        horario: "14:00",
        telefone: "(27) 98888-8888",
        valor: "300,00",
        dia: "Terça-feira"
    },
    {
        nome: "Carlos Souza",
        servico: "Pintura de Casa",
        endereco: "Rua São João, 789",
        horario: "16:00",
        telefone: "(27) 97777-7777",
        valor: "500,00",
        dia: "Quarta-feira"
    },
    {
        nome: "Ana Costa",
        servico: "Reparo de Telhado",
        endereco: "Rua Rio Branco, 101",
        horario: "08:00",
        telefone: "(27) 96666-6666",
        valor: "250,00",
        dia: "Quinta-feira"
    },
    {
        nome: "Felipe Pereira",
        servico: "Reparo de Encanação",
        endereco: "Rua Amazonas, 202",
        horario: "11:00",
        telefone: "(27) 95555-5555",
        valor: "180,00",
        dia: "Sexta-feira"
    },
    {
        nome: "Sofia Almeida",
        servico: "Troca de Piso",
        endereco: "Rua Vitória, 303",
        horario: "13:00",
        telefone: "(27) 94444-4444",
        valor: "400,00",
        dia: "Sábado"
    },
    {
        nome: "Ricardo Lima",
        servico: "Limpeza de Fachada",
        endereco: "Rua Maracanã, 404",
        horario: "09:00",
        telefone: "(27) 93333-3333",
        valor: "220,00",
        dia: "Domingo"
    },
    {
        nome: "Patrícia Rocha",
        servico: "Reparo de Ar Condicionado",
        endereco: "Rua Boa Vista, 505",
        horario: "15:00",
        telefone: "(27) 92222-2222",
        valor: "350,00",
        dia: "Segunda-feira"
    }
];

// Função para exibir os dados na tabela
function loadClientData() {
    const clientList = document.getElementById('client-list');
    
    // Limpa os dados antigos
    clientList.innerHTML = '';

    // Preenche a tabela com os dados dos clientes
    clients.forEach(client => {
        const row = document.createElement('tr');
        
        // Cria as células para os dados do cliente
        row.innerHTML = `
            <td>${client.nome}</td>
            <td>${client.servico}</td>
            <td>${client.endereco}</td>
            <td>${client.dia} - ${client.horario}</td>
            <td>${client.telefone}</td>
            <td>${client.valor}</td>
        `;
        
        // Adiciona a linha à tabela
        clientList.appendChild(row);
    });
}

// Carrega os dados assim que a página for carregada
window.onload = () => {
    loadClientData();
    getCurrentTime(); // Exibe o tempo inicial
};
