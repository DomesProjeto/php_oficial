<?php 
// Habilitar exibição de erros

// Incluir arquivo de conexão com o banco de dados
include 'php/db_connection.php';

global $conn;

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o campo 'email' e 'password' existem
    if (isset($_POST['email']) && isset($_POST['password'])) {

        // Sanitizar e validar o e-mail
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitiza o e-mail
        $email = filter_var($email, FILTER_VALIDATE_EMAIL); // Valida o e-mail

        $primeiro_nome = $_POST['firstname']; // Sanitiza o primeiro nome

        $sobrenome = $_POST['lastname']; // Sanitiza o sobrenome

        $celular = $_POST['number'];

        $password = $_POST['password']; // Sanitiza a senha

        $genero = $_POST['gender']; // Sanitiza o gênero



        try{
            // Preparar a consulta para buscar o e-mail no banco de dados
            $stmt = "INSERT INTO usuarios (id, primeiro_nome, sobrenome, email, celular, senha, genero, cep, estado, municipio, bairro, numero, complemento, foto_perfil) VALUES (null, :primeiro_nome, :sobrenome, :email, :celular, :senha, null, null, null, null, null, null, null, null)";
            $stmt = $conn->prepare($stmt);
            $stmt->bindParam(":primeiro_nome", $primeiro_nome);
            $stmt->bindParam(":sobrenome", $sobrenome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":celular", $celular);
            $stmt->bindParam(":senha", $password);
            $stmt->execute();

            session_start();
            $_SESSION['email'] = $email;
            header('Location: trabalhador.php');
        }
        catch(PDOException $e){
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
?>



<!DOCTYPE html> 
<html lang="pt-br"> 

<head> <!-- Início da seção de cabeçalho -->
    <meta charset="UTF-8"> <!-- Meta tag para definir a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta tag para configuração de viewport -->
    <link rel="stylesheet" href="css/cadastro.css"> <!-- Link para arquivo CSS externo -->
    <title>Formulario de cadastro</title> <!-- Título da página -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> <!-- Ícone da página -->
    <!--<script src="js/cadastro.js"></script> -->
</head> <!-- Fim da seção de cabeçalho -->

<body> <!-- Início do corpo da página -->
    <div class="container"> <!-- Div principal com classe container -->
        <div class="form-image"> <!-- Div para a imagem do formulário -->
            <img src="img/logo2.png"> <!-- Imagem do logotipo -->
        </div>
        <div class="form"> <!-- Div para o formulário de cadastro -->
            <form method="POST"> <!-- Formulário com método de ação indefinido -->
                <div class="form-header"> <!-- Div para cabeçalho do formulário -->
                    <div class="title"> <!-- Div para título -->
                        <h1>Cadastre-se</h1> <!-- Título principal -->
                    </div>
                </div>
                <div class="input-group"> <!-- Div para o grupo de campos de entrada -->
                    <div class="input-box"> <!-- Div para cada caixa de entrada -->
                        <label for="firstname">Primeiro nome:</label> <!-- Rótulo para campo de entrada -->
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required> <!-- Campo de entrada para primeiro nome -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="lastname">Sobrenome:</label> <!-- Rótulo para campo de entrada -->
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required> <!-- Campo de entrada para sobrenome -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="email">Email:</label> <!-- Rótulo para campo de entrada -->
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required> <!-- Campo de entrada para email -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="number">Celular:</label> <!-- Rótulo para campo de entrada -->
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required> <!-- Campo de entrada para celular -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="password">Senha:</label> <!-- Rótulo para campo de entrada -->
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required> <!-- Campo de entrada para senha -->
                    </div>
                    <div class="input-box"> <!-- Outra caixa de entrada -->
                        <label for="confirmpassword">Confirme sua senha:</label> <!-- Rótulo para campo de entrada -->
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Digite sua senha" required> <!-- Campo de entrada para confirmação de senha -->
                    </div>
                </div>

                <div class="gender-inputs"> <!-- Div para seleção de gênero -->
                    <div class="gender-title"> <!-- Div para título de gênero -->
                        <h6>Gêneros</h6> <!-- Título para seleção de gênero -->
                    </div>
                </div>
                <div class="gender-group"> <!-- Div para grupo de seleção de gênero -->
                    <div class="gender-input"> <!-- Div para opção de gênero -->
                        <input type="radio" id="female" name="gender"> <!-- Opção de gênero feminino -->
                        <label for="female">Feminino</label> <!-- Rótulo para opção feminino -->
                    </div>

                    <div class="gender-input"> <!-- Outra opção de gênero -->
                        <input type="radio" id="male" name="gender"> <!-- Opção de gênero masculino -->
                        <label for="male">Masculino</label> <!-- Rótulo para opção masculino -->
                    </div>

                    <div class="gender-input"> <!-- Outra opção de gênero -->
                        <input type="radio" id="others" name="gender"> <!-- Opção de gênero outros -->
                        <label for="others">Outros</label> <!-- Rótulo para opção outros -->
                    </div>

                </div>

                <div class="continue-button"> <!-- Div para botões de continuação -->
                 <!-- Botão com link para página de trabalhador -->
                    <!-- <button><a href="trabalhador.php">Continuar</a></button> -->
                    <button type="submit">Continuar</button>
                </div>
            </form> <!-- Fim do formulário -->
        </div> <!-- Fim da div do formulário -->
    </div> <!-- Fim da div principal -->
</body> <!-- Fim do corpo da página -->

</html>