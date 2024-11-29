<?php
$avaliacoes = [
    [
        'customer_name' => 'João Silva',
        'service_type' => 'Limpeza de Jardim',
        'date' => '15 de Outubro de 2024',
        'rating' => 4
    ],
    [
        'customer_name' => 'Maria Oliveira',
        'service_type' => 'Instalação Elétrica',
        'date' => '10 de Outubro de 2024',
        'rating' => 5
    ],
    [
        'customer_name' => 'Carlos Souza',
        'service_type' => 'Pintura de Casa',
        'date' => '05 de Outubro de 2024',
        'rating' => 3
    ]
   
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações dos Trabalhadores</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/avaliacao.css">
</head>
<body>

    <div class="container">
        <h1>Avaliações que você Recebeu</h1>
        <a href="#" id="back-button" class="back-button">Voltar ao Painel de Controle</a>

        <ul class="evaluation-list">
            <?php
            // Loop pelas avaliações
            foreach ($avaliacoes as $avaliacao) {
                echo "<li class='evaluation-item'>";
                echo "<span class='customer-name'>{$avaliacao['customer_name']}</span>";
                echo "<span class='service-type'>{$avaliacao['service_type']}</span>";
                echo "<span class='date'>{$avaliacao['date']}</span>";
                echo "<div class='stars' data-rating='{$avaliacao['rating']}'>";
                echo "</div></li>";
            }
            ?>
        </ul>
    </div>

    <script src="js/avaliacoes.js"></script>
</body>
</html>
