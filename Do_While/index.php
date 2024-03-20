<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição DOWHILE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <?php 
            $num = 1;

            do{ //dowhile funciona de maneira inversa ao while
                echo "<p>$num</p>";
                $num++;
            }while ($num <= 10);
        ?>
    </section><br>

    <section>
        <?php 
            $num = 10;

            do{ //primeiro é lido o que o programa deverá realizar
                echo "<p>$num</p>";
                $num--;
            }while ($num >= 1); //depois mostra os parâmetros a serem seguidos
        ?>
    </section><br>

    <section>
        <?php 
            $num = 0;

            do{
                echo "<p>$num</p>";
                $num += 2;
            }while ($num <= 20);
        ?>
    </section>

</body>
</html>