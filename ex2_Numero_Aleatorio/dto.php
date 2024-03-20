<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório desafio</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <header>
        <h1>Aqui está o resultado</h1><br>
    </header>

    <?php 
        $numero = rand(0, 100); //ou mt_rand, ou random_int
        echo "O número sorteado foi: $numero</br></br>";
    ?>

    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>

</body>
</html>