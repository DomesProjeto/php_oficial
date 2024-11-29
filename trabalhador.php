<!DOCTYPE html> 
<html lang="pt-br">

<head> <!-- Início da seção de cabeçalho -->
    <meta charset="UTF-8"> <!-- Meta tag para definir a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta tag para configuração de viewport -->
    <link rel="stylesheet" href="css/cadastro.css"> <!-- Link para arquivo CSS externo -->
    <title>Cadastro do Contratante</title> <!-- Título da página -->
    <link rel="shortcut icon" href="img/menu/logo.png" type="image/x-icon"> <!-- Ícone da página -->
</head> 
<body> <!-- Início do corpo da página -->
    <div class="container"> <!-- Div principal com classe container -->
        <div class="form-image"> <!-- Div para a imagem do formulário -->
            <img src="img/logo2.png"> <!-- Imagem do logotipo -->
        </div>
        <div class="form"> <!-- Div para o formulário de cadastro -->
            <form action="#"> <!-- Formulário com método de ação indefinido -->
                <div class="form-header"> <!-- Div para cabeçalho do formulário -->
                    <div class="title"> <!-- Div para título -->
                        <h1>Continue o seu cadastro</h1> <!-- Título principal -->
                    </div>
                </div>
                <div class="input-group"> <!-- Div para o grupo de campos de entrada -->
                    <div class="input-box"> <!-- Div para cada caixa de entrada -->
                        <label for="country">País</label> <!-- Rótulo para campo de entrada -->
                        <input id="country" type="text" name="country" placeholder="Digite o país onde reside" required> <!-- Campo de entrada para país -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="state">Estado</label> <!-- Rótulo para campo de entrada -->
                        <input id="state" type="text" name="state" placeholder="Digite o seu Estado" required> <!-- Campo de entrada para estado -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="municipio">Município:</label> <!-- Rótulo para campo de entrada -->
                        <input id="municipio" type="text" name="municipio" placeholder="Digite o seu Município" required> <!-- Campo de entrada para município -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="bairro">Bairro</label> <!-- Rótulo para campo de entrada -->
                        <input id="bairro" type="text" name="bairro" placeholder="Bairro" required> <!-- Campo de entrada para bairro -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="num">Número</label> <!-- Rótulo para campo de entrada -->
                        <input id="num" type="text" name="num" placeholder="Número" required> <!-- Campo de entrada para número -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="confirmpassword">Complemento</label> <!-- Rótulo para campo de entrada -->
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Digite sua senha" required> <!-- Campo de entrada para complemento -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="profilepic">Foto de Perfil</label> <!-- Rótulo para campo de entrada -->
                        <input id="profilepic" type="file" name="profilepic" accept="image/*"> <!-- Campo de entrada para upload de foto de perfil -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="biografia">Biografia</label> <!-- Rótulo para campo de entrada -->
                        <textarea id="biografia" name="biografia" placeholder="Escreva uma breve biografia sobre você" rows="4" cols="50"></textarea> <!-- Área de texto para biografia -->
                    </div>
                </div>

                <div class="notification-inputs"> <!-- Div para opções de notificação -->
                    <div class="notification-title"> <!-- Div para título de notificação -->
                        <h3>Quer ter seus serviços notificados</h3> <!-- Título da seção -->
                    </div>
                </div>
                <div class="notification-group"> <!-- Div para grupo de opções de notificação -->
                    <div class="notification-input"> <!-- Div para cada opção de notificação -->
                        <input type="radio" id="sim" name="notification"> <!-- Botão de rádio para opção "Sim" -->
                        <label for="sim">Sim, Quero!</label> <!-- Rótulo para opção "Sim" -->
                    </div>

                    <div class="notification-input"> <!-- Outra opção de notificação -->
                        <input type="radio" id="nao" name="notification"> <!-- Botão de rádio para opção "Não" -->
                        <label for="nao">Não, Obrigado!</label> <!-- Rótulo para opção "Não" -->
                    </div>

                    <div class="notification-input"> <!-- Outra opção de notificação -->
                        <input type="radio" id="lembre" name="notification"> <!-- Botão de rádio para opção "Lembre" -->
                        <label for="lembre">Me lembre mais tarde!</label> <!-- Rótulo para opção "Lembre" -->
                    </div>
                </div>
                <div class="continue-button" > <!-- Div para botão de continuação -->
                    <button><a href="especializacao.php">Continuar Cadastro</a></button> <!-- Botão com link para página de menu -->
                </div>
            </form> <!-- Fim do formulário -->
        </div> <!-- Fim da div do formulário -->
    </div> <!-- Fim da div principal -->
</body> <!-- Fim do corpo da página -->
</html> <!-- Fim da tag HTML -->
