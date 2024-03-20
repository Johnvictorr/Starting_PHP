<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis referenciadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num1 = $_GET["num1"] ?? 0;
        $num2 = $_GET["num2"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num1">Digite um número: </label><br><br>
            <input type="number" name="num1" id="num1" value="<?=$num1?>"><br><br>

            <label for="num2">Digite outro número: </label><br><br>
            <input type="number" name="num2" id="num2" value="<?=$num2?>"><br><br>

            <button>Enviar</button>
        </form>
    </main>

    <section>
        <?php 
            $num2 = $num1;
            $num2 += 5;

            echo "<p>$num1<br></p>";
            echo "<p>$num2<br></p>";
        ?>
    </section><br>

    <section>
        <?php 
            $num2 = &$num1; //o "&" serve para unir os falores das variáveis, portanto, serão os mesmos
            $num2 += 5;

            echo "<p>$num1<br></p>";
            echo "<p>$num2<br></p>";
        ?>
    </section>
</body>
</html>