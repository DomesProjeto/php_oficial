<?php
include 'db_agenda.php';

// Função de sanitização para prevenir XSS
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags($input));
}

// Consulta ao banco de dados para obter todos os horários
$sql = "SELECT * FROM horarios ORDER BY dia, horario";
$result = $conn->query($sql);

// Organiza os horários por dia
$horarios = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dia = sanitizeInput($row['dia']); 
        $horario = sanitizeInput($row['horario']);
        $horarios[$dia][] = $horario;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Semanal</title>
    <link rel="stylesheet" href="css/agenda.css">
    <script src="js/agenda.js"></script>
</head>
<?php include_once 'header.php'; ?>
<body>
    <div class="container">
        <h1>Agenda Semanal</h1>
        <div class="agenda">
            <?php
            // Dias da semana em ordem
            $dias_semana = ['Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo'];

            foreach ($dias_semana as $dia) {
                echo "<div class='dia'>";
                echo "<h2>$dia</h2>";
                echo "<ul id='$dia'>";

                // Verifica se há horários para este dia
                if (isset($horarios[$dia]) && count($horarios[$dia]) > 0) {
                    foreach ($horarios[$dia] as $horario) {
                        echo "<li>$horario <button class='btn-remover' onclick=\"removerHorario('$dia', '$horario')\">X</button></li>";
                    }
                } else {
                    echo "<li class='nenhum-horario'>Nenhum horário adicionado</li>";
                }
                echo "</ul>";
                echo "<button onclick=\"adicionarHorario('$dia')\">Adicionar horário</button>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
<?php include_once 'footer.php'; ?>
</html>
