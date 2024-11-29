<?php
include 'db_agenda.php';

$data = json_decode(file_get_contents("php://input"), true);
$dia = $data['dia'];
$horario = $data['horario'];

$sql = "INSERT INTO horarios (dia, horario) VALUES ('$dia', '$horario')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Horário adicionado com sucesso!"]);
} else {
    echo json_encode(["message" => "Erro ao adicionar horário."]);
}

$conn->close();
?>
