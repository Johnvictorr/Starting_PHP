<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Hora PHP</title>
</head>
<body>
    <h1>Informações sobre data e hora</h1>
    <?php
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>