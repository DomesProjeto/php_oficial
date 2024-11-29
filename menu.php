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
                    <a href="domesservice.php">
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
                    <img src="img/customer01.jpg" alt="">
 
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Visitações já recebidas </div>
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
                        <div class="cardName">Total de Comentários </div>
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

                            <tr>
                                <td>Martha Castro</td>
                                <td>180$</td>
                                <td>Jardinagem</td>
                                <td><span class="status delivered">Realizado</span></td>
                            </tr>

                            <tr>
                                <td>José Gomes</td>
                                <td>250$</td>
                                <td>Manutenção</td>
                                <td><span class="status pending">Cancelado</span></td>
                            </tr>

                            <tr>
                                <td>Luana Silva</td>
                                <td>380$</td>
                                <td>Limpeza</td>
                                <td><span class="status pending">Cancelado</span></td>
                            </tr>

                            <tr>
                                <td>Camila Perez</td>
                                <td>200$</td>
                                <td>Reparo</td>
                                <td><span class="status delivered">Realizado</span></td>
                            </tr>

                            <tr>
                                <td>Anna Souza</td>
                                <td>190$</td>
                                <td>Jardinagem</td>
                                <td><span class="status delivered">Realizado</span></td>
                            </tr>

                            <tr>
                                <td>Thomas Silva</td>
                                <td>125$</td>
                                <td>Manutenção</td>
                                <td><span class="status delivered">Realizado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>