<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes Ativos</title>
    <link rel="stylesheet" href="css/cliente.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> <!-- Ícone da página -->

</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-Domes"></ion-icon>
                        </span>
                        <span class="title">Domes - Serviços</span>
                    </a>
                </li>

                <li>
                    <a href="menu.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Painel de Controle</span>
                    </a>
                </li>

                <li>
                    <a href="clientes.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Seus Clientes</span>
                    </a>
                </li>

                <li>
                    <a href="avaliacoes.php">
                        <span class="icon">
                            <ion-icon name="star-outline"></ion-icon>
                        </span>
                        <span class="title">Avaliações</span>
                    </a>
                </li>

                <li>
                    <a href="trabalho.php">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Seus Trabalhos</span>
                    </a>
                </li>

                <li>
                    <a href="agenda.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Sua Agenda</span>
                    </a>
                </li>

                <li>
                    <a href="configuracoes.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Configurações</span>
                    </a>
                </li>

                <li>
                    <a href="ajuda.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Ajuda</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container2">
    
        <!-- Exibição do dia e hora atuais -->
        <div id="current-time" class="current-time"></div>
        
        <button class="back-button" onclick="goBack()">Voltar para a Página Principal</button>
        <h1>Lista de seus clientes ativos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Serviço</th>
                    <th>Endereço</th>
                    <th>Dia e Hora</th>
                    <th>Telefone</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody id="client-list">
                <!-- Os dados serão inseridos pelo JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Botão de menu (mobile) -->
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>

    <script>
        function toggleMenu() {
            document.querySelector('.navigation').classList.toggle('active');
        }
    </script>
    
    <script src="js/cliente.js"></script>
</body>

</html>
