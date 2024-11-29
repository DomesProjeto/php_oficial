<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Configurando a viewport para a responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link para o arquivo CSS personalizado -->
    <link rel="stylesheet" href="css/tela_inicial/styles.css">
    <!-- Favicon da página -->
    <link rel="shortcut icon" href="img/tela_inicial/logo.png" type="image/x-icon">
    <!-- Link para o arquivo JavaScript do jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link para o arquivo JavaScript do ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link para o arquivo JavaScript personalizado -->
    <script src="js/tela_inicial.js"></script>
    <!-- Título da página -->
    <title>Domes</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Barra de navegação -->
        <nav id="navbar">
            <!-- Logo do site -->
            <img src="img/tela_inicial/logo.png" alt="Descrição da imagem" id="nav_logo"> 
            <!-- Lista de navegação -->
            <ul id="nav_list">
                <!-- Item do menu com link para a seção Início -->
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <!-- Item do menu com link para a seção Serviços -->
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <!-- Item do menu com link para a seção Avaliações -->
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>
            <!-- Botão para cadastro -->
            <button class="btn-default">
                <a href="cadastro.php">Cadastro</a>
            </button>
            <!-- Botão para login -->
            <button class="btn-default">
                <a href="login.php">login</a>
            </button>
            <!-- Botão do menu móvel -->
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>
        <!-- Menu móvel -->
        <div id="mobile_menu">
            <!-- Lista de navegação para o menu móvel -->
            <ul id="mobile_nav_list">
                <!-- Item do menu com link para a seção Início -->
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <!-- Item do menu com link para a seção Serviços -->
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <!-- Item do menu com link para a seção Avaliações -->
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Conteúdo principal da página -->
    <main id="content">
        <!-- Seção Início -->
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <!-- Título da seção -->
                <h1 class="title">
                    Descubra especialistas e agende serviços para todas as suas
                    <span>Necessidades</span>
                </h1>
                <!-- Descrição da seção -->
                <p class="description">
                    Contrate profissionais e veja sua casa cuidada por nós
                </p>
                <strong><p class="description">
                    Serviços mais Buscados:
                </p></strong>
                <!-- Botões de chamada para ação -->
                <div id="cta_buttons">
                    <a href="#" class="btn-default">
                        Diarista
                    </a>
                    <a href="#" class="btn-default">
                        Pintura
                    </a>
                    <a href="#" class="btn-default">
                        Elétrica
                    </a>
                </div>
                <!-- Botões de redes sociais -->
                <div class="social-media-buttons">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
            <!-- Banner da seção -->
            <div id="banner">
                <img src="img/tela_inicial/home.png" alt="">
            </div>
        </section>

        <!-- Seção Serviços -->
        <section id="menu">
            <!-- Título da seção -->
            <h2 class="section-title">Serviços</h2>
            <!-- Subtítulo da seção -->
            <h3 class="section-subtitle">Mais Contratados da Plataforma</h3>
            <!-- Div para os serviços mais buscados -->
            <div id="buscados">
                <!-- Cada serviço com suas informações -->
                <div class="buscas">
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/tela_inicial/serviço1.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">
                        Serviços de Elétrica
                    </h3>
                    <span class="buscas-description">
                        Instalação de Painéis Solares Manutenção Elétrica
                    </span>
                    <div class="buscas-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>
                    <div class="buscas-price">
                        <h4>Preço médio por hora: R$70,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
                <div class="buscas">
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/tela_inicial/serviço2.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">
                        Serviços de Mudanças
                    </h3>
                    <span class="buscas-description">
                        Montagem e Desmontagem de Móveis Carregamento e Descarregamento
                    </span>
                    <div class="buscas-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>
                    <div class="buscas-price">
                        <h4>Preço médio por hora: R$50,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
                <div class="buscas">
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/tela_inicial/serviço3.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">
                        Serviços de Pintura
                    </h3>
                    <span class="buscas-description">
                        Pintura profissional de Móveis e Armários Pintura Residencial
                    </span>
                    <div class="buscas-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>
                    <div class="buscas-price">
                        <h4>Preço médio por hora: R$30,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
                <div class="buscas">
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/tela_inicial/serviço4.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">
                        Serviços de Diarista
                    </h3>
                    <span class="buscas-description">
                        Organização e Limpeza de Ambientes Limpeza Especializada
                    </span>
                    <div class="buscas-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>
                    <div class="buscas-price">
                        <h4>Preço médio por hora: R$40,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção Avaliações -->
        <section id="testimonials">
            <!-- Imagem de comentários -->
            <img src="img/tela_inicial/comentários.png" id="testimonials_comentários" alt="">
            <div id="testimonials_content">
                <!-- Título da seção -->
                <h2 class="section-title">
                    Feedbacks dos Clientes
                </h2>
                <!-- Subtítulo da seção -->
                <h3 class="section-subtitle">
                    Como são os retornos dos trabalhos
                </h3>
                <!-- Div para os feedbacks -->
                <div id="feedbacks">
                    <!-- Cada feedback com suas informações -->
                    <div class="feedback">
                        <img src="img/tela_inicial/icon1.png" class="feedback-avatar"alt="">
                        <div class="feedback-content">
                            <p>
                                Carlos Almeida
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Achei aqui no app um ótimo eletricista, ele fez a rede elétrica da nova casa da minha Mãe. Contratei um pintor agora e gostei muito da facilidade do aplicativo."
                            </p>
                        </div>
                    </div>
                    <div id="feedbacks">
                        <div class="feedback">
                            <img src="img/tela_inicial/icon2.jpg" class="feedback-avatar"alt="">
                            <div class="feedback-content">
                                <p>
                                    Bianca Gomes
                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </p>
                                <p>
                                    "Cheguei na cidade recentemente e esse app tem salvado a minha vida. Já contratei várias vezes e recomendo principalmente o serviço de limpeza deles"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé da página -->
    <footer>
        <!-- Imagem decorativa no rodapé -->
        <img src="img/tela_inicial/wave.svg" alt="">
        <div id="footer_items">
            <!-- Texto de copyright -->
            <span id="copyright" position:absolute>
                &copy; 2024 DOMES
            </span>
            <!-- Botões de redes sociais -->
            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
