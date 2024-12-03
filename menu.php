<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirecionar para o login
    exit;
}

// Determinar saudação com base no horário
date_default_timezone_set('America/Sao_Paulo');
$hour = date('H');
if ($hour < 12) {
    $greeting = "Bom dia";
} elseif ($hour < 18) {
    $greeting = "Boa tarde";
} else {
    $greeting = "Boa noite";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Trabalhador</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
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
                    <a href="#">
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
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Buscar na Domes">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="img/customer01.jpg" alt="Usuário">
                </div>
            </div>

            <!-- Saudação com o nome do usuário -->
            <div class="user-greeting">
                <h2><?php echo $greeting . ", " . htmlspecialchars($_SESSION['user_name']) . "!"; ?></h2>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Visitações já recebidas</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Trabalhos já realizados</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">40</div>
                        <div class="cardName">Total de Comentários</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">2.500$</div>
                        <div class="cardName">Receita Gerada</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Histórico de Contratações</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Cliente</td>
                                <td>Valor</td>
                                <td>Serviço</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alice Alves</td>
                                <td>120$</td>
                                <td>Limpeza</td>
                                <td><span class="status delivered">Realizado</span></td>
                            </tr>
                            <tr>
                                <td>Pedro Pereira</td>
                                <td>100$</td>
                                <td>Reforma</td>
                                <td><span class="status pending">Cancelado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts ========= -->
    <script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
