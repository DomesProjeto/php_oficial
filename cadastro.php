<?php 
// Habilitar exibição de erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

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

        // Verificar se o valor do gênero é válido
        if ($genero !== 'Feminino' && $genero !== 'Masculino' && $genero !== 'Outros') {
            // Se o valor de gênero não for válido, atribui um valor padrão ou gera um erro
            $genero = 'Outros'; // ou você pode definir como 'Masculino' ou 'Feminino' como padrão
        }

        // Criptografar a senha antes de armazená-la no banco de dados
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // A inserção na tabela agora deve incluir todos os campos obrigatórios
        try{
            // Preparar a consulta para inserir os dados no banco de dados
            $stmt = "INSERT INTO usuarios (primeiro_nome, sobrenome, email, celular, senha, genero) 
                     VALUES (:primeiro_nome, :sobrenome, :email, :celular, :senha, :genero)";
            $stmt = $conn->prepare($stmt);
            $stmt->bindParam(":primeiro_nome", $primeiro_nome);
            $stmt->bindParam(":sobrenome", $sobrenome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":celular", $celular);
            $stmt->bindParam(":senha", $password_hash); // Bind da senha criptografada
            $stmt->bindParam(":genero", $genero); // Bind do gênero
            $stmt->execute();

            // Iniciar a sessão e redirecionar
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> <!-- Ícone da página -->
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/logo2.png">
        </div>
        <div class="form">
            <form method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro nome:</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>
                    <div class="input-box">
                        <label for="lastname">Sobrenome:</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email:</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular:</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha:</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gêneros</h6>
                    </div>
                </div>
                <div class="gender-group">
                <div class="gender-input">
                    <input type="radio" id="female" name="gender" value="Feminino"> <!-- Atributo value adicionado -->
                    <label for="female">Feminino</label>
                </div>

                <div class="gender-input">
                    <input type="radio" id="male" name="gender" value="Masculino"> <!-- Atributo value adicionado -->
                    <label for="male">Masculino</label>
                </div>

                <div class="gender-input">
                    <input type="radio" id="others" name="gender" value="Outros"> <!-- Atributo value adicionado -->
                    <label for="others">Outros</label>
                </div>
            </div>


                <div class="continue-button">
                    <button type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
