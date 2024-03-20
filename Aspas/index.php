<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas Duplas</title>
</head>
<body>
    <?php
    
    //Aspas simples mostram ao usuário apenas o nome escolhido para a variável (acompanhado pelo sinal de $)
    //Já as aspas duplas mostram o valor atribuído à variável, no script

        $nome = "John";
        $sobrenome = "Victor";
        $apelido = "Japonês";

        echo "Olá, $nome \"$apelido\" $sobrenome!";
    ?>
</body>
</html>