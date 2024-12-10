<?php
include_once('php/db_connection.php');

global $conn;

try {
    // Recuperando as avaliações do banco de dados
    $sql = "SELECT * FROM avaliacoes WHERE trabalhador_id = :trabalhador_id";
    $stmt = $conn->prepare($sql);
    
    // Defina o ID do trabalhador (aqui está configurado como um exemplo)
    $trabalhador_id = 1; // Substitua pelo ID do trabalhador desejado
    $stmt->bindParam(':trabalhador_id', $trabalhador_id);
    
    $stmt->execute();
    $avaliacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao recuperar as avaliações: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações dos Trabalhadores</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/avaliacao.css">
</head>
<body>
    <div class="container">
        <h1>Avaliações que você Recebeu</h1>

        <a href="#" id="back-button" class="back-button">Voltar ao Painel de Controle</a>

        <ul class="evaluation-list">
            <?php
            if (!empty($avaliacoes)) {
                foreach ($avaliacoes as $avaliacao) {
                    // Recuperando o nome do avaliador (pode precisar de consulta na tabela `usuarios` para buscar o nome real)
                    $avaliador_id = $avaliacao['avaliador_id'];

                    // Consultando o nome do avaliador
                    $sql_avaliador = "SELECT primeiro_nome FROM usuarios WHERE id = :avaliador_id";
                    $stmt_avaliador = $conn->prepare($sql_avaliador);
                    $stmt_avaliador->bindParam(':avaliador_id', $avaliador_id);
                    $stmt_avaliador->execute();
                    $avaliador = $stmt_avaliador->fetch(PDO::FETCH_ASSOC);

                    // Exibindo o nome do avaliador
                    $nome_avaliador = $avaliador ? $avaliador['primeiro_nome'] : 'Avaliador desconhecido';
                    $data_avaliacao = new DateTime($avaliacao['data_avaliacao']);
                    $data_formatada = $data_avaliacao->format('d \d\e F \d\e Y');
                    
                    // Exibindo a avaliação com nome do avaliador, nota e comentário
                    echo "<li class='evaluation-item'>
                            <span class='customer-name'>$nome_avaliador</span>
                            <span class='date'>$data_formatada</span>
                            <div class='stars' data-rating='" . $avaliacao['nota'] . "'>
                                <!-- As estrelas podem ser geradas aqui se necessário -->
                            </div>
                            <p class='comment'>" . htmlspecialchars($avaliacao['comentario']) . "</p>
                          </li>";
                }
            } else {
                echo "<p>Não há avaliações para exibir.</p>";
            }
            ?>
        </ul>
    </div>

    <script src="js/avaliacoes.js"></script>
</body>
</html>
