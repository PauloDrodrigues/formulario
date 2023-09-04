 <?php
    // Definir o fuso horário para o Brasil
    date_default_timezone_set('America/Sao_Paulo');

    // Obter a data e hora atuais
    $dataHoraAtual = date('Y-m-d H:i:s');

    echo "<p>A data e hora atuais são: $dataHoraAtual</p>";
    ?>