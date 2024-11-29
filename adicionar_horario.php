<?php
include 'db_agenda.php';

$data = json_decode(file_get_contents('php://input'), true);

// Sanitiza e valida os dados
$dia = htmlspecialchars(strip_tags($data['dia']));
$horario = htmlspecialchars(strip_tags($data['horario']));

// Verifica se o horário está no formato correto e dentro de valores válidos
if (preg_match("/^(2[0-3]|[01]?[0-9]):([0-5][0-9])$/", $horario)) {
    if ($dia && $horario) {
        $sql = "INSERT INTO horarios (dia, horario) VALUES ('$dia', '$horario')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Erro ao adicionar o horário."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Dados inválidos."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Horário inválido. Use o formato hh:mm com valores entre 00:00 e 23:59."]);
}
?>
