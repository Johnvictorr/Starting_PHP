<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número primo com FOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num = $_GET["num"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">DIGITE UM NÚMERO</label><br><br>
            <input type="number" name="num" id="num" value="<?=$num?>"><br><br>

            <button>Enviar</button>
        </form>
    </main>

    <section>
        <?php 
            $mult = 0;

            for ($cont = 1;$cont <= $num;$cont++){
                if ($num % $cont == 0){
                    $mult++;
                    echo "<p>$cont</p>";
                }
            }
            echo "<p>Resultado: $mult</p>";
            if ($mult <= 2){
                echo "<p>O número $num é primo!</p>";
            }
            else {
                echo "<p>O número $num não é primo!</p>";
            }
        ?>
    </section>
    
</body>
</html>