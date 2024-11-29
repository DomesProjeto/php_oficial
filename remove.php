<?php
include 'db_agenda.php';

// Pega os dados do JavaScript (via POST)
$data = json_decode(file_get_contents("php://input"), true);
$dia = $data['dia'];
$horario = $data['horario'];

// Prepara a query para remover o horário
$sql = "DELETE FROM horarios WHERE dia = '$dia' AND horario = '$horario'";

// Executa a query
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Horário removido com sucesso!"]);
} else {
    echo json_encode(["message" => "Erro ao remover horário."]);
}

$conn->close();
?>
