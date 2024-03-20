<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultando do envio do formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Olá!</h1>

    <?php 
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        echo "Olá, $nome $sobrenome! Bem vindo(a)!"
    ?>
    
    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    
</body>
</html>