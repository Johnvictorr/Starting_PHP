<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição FOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <?php   //Início    Fim    Incremento
            for ($i= 1; $i <= 10 ; $i++) { 
                echo "<p>$i</p>";
            }
        ?>
    </section><br>

    <section>
        <?php 
            for ($i= 0; $i <= 20 ; $i+=2) { 
                echo "<p>$i</p>";
            }
        ?>
    </section><br>

    <section>
        <?php 
            for ($i= 10; $i >= 1 ; $i--) { 
                echo "<p>$i</p>";
            }
        ?>
    </section>

</body>
</html>