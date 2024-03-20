<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php 
            include "script.php"; //importando o script de outro arquivo
            hello(); //jogando as funções desse outro arquivo aqui
            numero(7); // todo conteúdo dentro da função é chamada aqui nesse arquivo
        ?>
    </section> 
</body>
</html>