<?php
// Inclusão do arquivo de conexão com o banco de dados
include 'db_agenda.php';

// Recebe e decodifica os dados enviados via JSON pela requisição
$data = json_decode(file_get_contents('php://input'), true);

// Sanitiza e valida os dados recebidos (campo 'dia' e 'horario')
$dia = htmlspecialchars(strip_tags($data['dia'])); // Sanitiza o campo 'dia'
$horario = htmlspecialchars(strip_tags($data['horario'])); // Sanitiza o campo 'horario'

// Verifica se o horário está no formato correto (hh:mm), utilizando expressão regular
if (preg_match("/^(2[0-3]|[01]?[0-9]):([0-5][0-9])$/", $horario)) {
    // Verifica se os campos 'dia' e 'horario' não estão vazios
    if ($dia && $horario) {
        // Prepara a consulta SQL para inserir os dados no banco de dados
        $sql = "INSERT INTO horarios (dia, horario) VALUES ('$dia', '$horario')";
        // Executa a consulta no banco e verifica se foi bem-sucedida
        if ($conn->query($sql) === TRUE) {
            // Se inserção for bem-sucedida, retorna um JSON com sucesso
            echo json_encode(["success" => true]);
        } else {
            // Se houver erro ao executar a consulta, retorna uma mensagem de erro
            echo json_encode(["success" => false, "message" => "Erro ao adicionar o horário."]);
        }
    } else {
        // Se 'dia' ou 'horario' estiverem vazios, retorna erro de dados inválidos
        echo json_encode(["success" => false, "message" => "Dados inválidos."]);
    }
} else {
    // Se o horário não estiver no formato válido, retorna um erro com a explicação do formato correto
    echo json_encode(["success" => false, "message" => "Horário inválido. Use o formato hh:mm com valores entre 00:00 e 23:59."]);
}
?>
