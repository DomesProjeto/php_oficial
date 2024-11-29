<?php
include 'db_agenda.php';

$data = json_decode(file_get_contents('php://input'), true);

// Sanitiza e valida os dados
$dia = htmlspecialchars(strip_tags($data['dia']));
$horario = htmlspecialchars(strip_tags($data['horario']));

// Verifica se os dados são válidos
if ($dia && $horario) {
    $sql = "DELETE FROM horarios WHERE dia = '$dia' AND horario = '$horario'";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Erro ao remover o horário."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Dados inválidos."]);
}
?>

