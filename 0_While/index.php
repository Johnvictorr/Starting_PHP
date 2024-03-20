<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição WHILE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <?php 
            $num = 10; //o programa deverá finalizar com esse valor

            while ($num >= 1){ //enquanto o número for > ou = a 1, ele se repetirá (até o valor de $num)
                echo "<p>$num</p>";
                $num--; //decremento (subtrai 1)
            }
        ?>
    </section><br>
    
    <section>
        <?php 
            $num = 1;

            while ($num <= 10){
                echo "<p>$num</p>";
                $num++;
            }
        ?>
    </section><br>

    <section>
        <?php 
            $num = 2;

            while ($num <= 10){
                echo "<p>$num</p>";
                $num += 2;
            }
        ?>
    </section><br>

    <section>
        <?php 
            $num = 3;

            while ($num <= 10){
                echo "<p>$num</p>";
                $num += 3;
            }
        ?>
    </section>
    
</body>
</html>