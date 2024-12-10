<?php
session_start();

try {
    // Verificar se o usuário está logado
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php'); // Redirecionar para o login
        exit;
    }

    // Determinar saudação com base no horário
    date_default_timezone_set('America/Sao_Paulo');
    $hour = date('H');
    $greeting = $hour < 12 ? "Bom dia" : ($hour < 18 ? "Boa tarde" : "Boa noite");

    // Capturar informações do usuário logado
    $user_id = $_SESSION['user_id'];

    // Conectar ao banco de dados
    include 'php/db_connection.php';

    // Consultas corrigidas para preencher os dados dinâmicos
    $query_visits = "SELECT * FROM domes.visitacoes WHERE trabalhador_id = :user_id";
    $query_jobs = "SELECT COUNT(*) AS total FROM domes.trabalhos WHERE usuario_id = :user_id";
    $query_comments = "SELECT COUNT(*) AS total FROM domes.comentarios WHERE trabalhador_id = :user_id";
    $query_revenue = "SELECT SUM(valor) AS total FROM domes.pagamentos WHERE trabalhador_id = :user_id";
    $query_history = "SELECT cliente, valor, servico, status FROM domes.historico_contratacoes WHERE trabalhador_id = :user_id ORDER BY data DESC";

    // Consultar visitacoes
    $stmt = $conn->prepare($query_visits);
    $stmt->execute(['user_id' => $user_id]);
    $visits = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Consultar trabalhos realizados
    $stmt = $conn->prepare($query_jobs);
    $stmt->execute(['user_id' => $user_id]);
    $jobs = $stmt->fetchColumn();

    // Consultar comentários
    $stmt = $conn->prepare($query_comments);
    $stmt->execute(['user_id' => $user_id]);
    $comments = $stmt->fetchColumn();

    // Consultar receita gerada
    $stmt = $conn->prepare($query_revenue);
    $stmt->execute(['user_id' => $user_id]);
    $revenue = $stmt->fetchColumn();

    // Consultar histórico de contratações
    $stmt = $conn->prepare($query_history);
    $stmt->execute(['user_id' => $user_id]);
    $history = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    die("Erro: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Trabalhador</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> <!-- Ícone da página -->

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
                <!-- Card de Visitações -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $visits ? count($visits) : 0; ?></div>
                        <div class="cardName">Visitações realizadas</div>
                    </div>
                </div>

                <!-- Card de Trabalhos Realizados -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $jobs ? $jobs : 0; ?></div>
                        <div class="cardName">Trabalhos realizados</div>
                    </div>
                </div>

                <!-- Card de Comentários -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $comments ? $comments : 0; ?></div>
                        <div class="cardName">Total de Comentários</div>
                    </div>
                </div>

                <!-- Card de Receita Gerada -->
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo number_format($revenue, 2, ',', '.'); ?>$</div>
                        <div class="cardName">Receita Gerada</div>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <h2>Histórico de Contratações</h2>
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
                            <?php foreach ($history as $entry): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($entry['cliente']); ?></td>
                                    <td><?php echo htmlspecialchars($entry['valor']); ?>$</td>
                                    <td><?php echo htmlspecialchars($entry['servico']); ?></td>
                                    <td><?php echo ucfirst(htmlspecialchars($entry['status'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
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
