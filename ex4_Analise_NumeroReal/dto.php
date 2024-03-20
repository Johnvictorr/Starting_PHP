<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real desafio</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

    <header>
        <h1>Aqui está o resultado</h1>
    </header>

    <?php 
        $numero = $_GET["numero"] ?? 0;
        $inteiro = (int) $numero;
        $resto = $numero - $inteiro;

        echo "<ul><li>O valor inteiro do número escolhido é: <strong>". number_format($inteiro, 0, ",", ".") ."</strong></li>";

        echo "<li>O valor decimal do número escolhido é: <strong>". number_format($resto, 2, ",", ".") ."</strong></li></ul></br>"
    ?>
        
    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    
</body>
</html>