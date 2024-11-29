<?php
// Habilitar exibição de erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluir arquivo de conexão com o banco de dados
include 'php/db_connection.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o campo 'email' e 'password' existem
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Sanitizar e validar o e-mail
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitiza o e-mail
        $email = filter_var($email, FILTER_VALIDATE_EMAIL); // Valida o e-mail

        // Sanitizar e validar a senha
        $password = htmlspecialchars($_POST['password']); // Sanitiza a senha para evitar XSS
        $password = trim($password); // Remove espaços em branco no início e no final

        // Verificar se o e-mail e a senha são válidos
        $errors = [];
        if (!$email) {
            $errors[] = "O e-mail fornecido é inválido.";
        }
        if (empty($password)) {
            $errors[] = "A senha não pode estar vazia.";
        }

        // Se não houver erros, verificar no banco de dados
        if (empty($errors)) {
            // Preparar a consulta para buscar o e-mail no banco de dados
            $stmt = $conn->prepare("SELECT id, email, senha FROM usuarios WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Verificar se o e-mail existe no banco de dados
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user) {
                // Verificar se a senha está correta
                if ($password == $user['senha']) {
                    // Se as credenciais estiverem corretas, redirecionar para a página index.php
                    header('Location: ./menu.php'); // Redireciona para a página principal
                    exit;
                } else {
                    $errors[] = "E-mail ou senha incorretos.";
                }
            } else {
                $errors[] = "Você não possui uma conta. Por favor, cadastre-se.";
            }
        }
    } else {
        $errors[] = "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="shortcut icon" href="img/menu/logo.png" type="image/x-icon">
</head>
<body>
    
    <main id="login-container">
        <form id="login_form" method="POST"> <!-- Formulário de login -->
            <div id="form_header">
                <h1>Faça o seu Login</h1>
            </div>

            <div id="inputs">
                <div class="input-box">
                    <label for="email">
                        <h2>E-mail:</h2>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="password">
                        <h2>Senha:</h2>
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="password" id="password" name="password" required>
                        </div>
                    </label>
                    <div id="forgot-password">
                        <a href="#">
                            <h3>Esqueci minha Senha</h3>
                        </a>
                    </div>
                </div>
            </div>

            <button type="submit" id="login-button">Entrar</button> <!-- Botão de login -->
            
            <!-- Exibir erros de validação -->
            <?php if (!empty($errors)): ?>
                <div class="errors">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </main>

</body>
</html>
