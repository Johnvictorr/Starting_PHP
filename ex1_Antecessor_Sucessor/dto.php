<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor desafio</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <header>
        <h1>Aqui está o resultado</h1><br><br>
    </header>

    <?php 
        $numero = $_GET["numero"] ?? 1;
        echo "O número escolhido foi: $numero</br></br>";

        $antecessor = $numero - 1;
        echo "O antecessor do número escolhido é: $antecessor</br></br>";

        $sucessor = $numero + 1;
        echo "O sucessor do número escolhido é: $sucessor</br></br>";

        //OU

        // $numero = $_GET["numero"] ?? 0;
        // echo "O número escolhido foi: $numero</br></br>";

        // echo "O antecessor de $numero é: ". $numero - 1 ." </br></br>";

        // echo "O sucessor de $numero é: ". $numero + 1 ." </br>";
    ?>
        
    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    
</body>
</html>