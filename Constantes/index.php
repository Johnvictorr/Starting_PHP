<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <?php
        //uma variável pode mudar de valor, caso a mesma seja mencionada novamente no programa com outro valor
        $nome = "John";
        $sobrenome = "Victor";

        //já uma constante, permanece com o mesmo valor, mesmo que seja mencionada novamente no programa, numa tentativa de mudar o valor anterior
        const PAIS = "Brasil";

        //retorno ao usuário
        echo "Seu nome é $nome $sobrenome, e você mora em " . PAIS, "!";
    ?>
</body>
</html>