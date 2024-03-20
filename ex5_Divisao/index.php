<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

    <main>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="dividendo">Dividendo</label><br><br>
            <input type="number" name="dividendo" id="dividendo"><br><br>

            <label for="divisor">Divisor</label><br><br>
            <input type="number" name="divisor" id="divisor"><br><br>

            <button>Dividir</button>
            
        </form>

    </main>

    <section>
        <?php 
            $dividendo = $_GET["dividendo"] ?? 0;
            $divisor = $_GET["divisor"] ?? 1;
            $quociente = (int) ($dividendo / $divisor);
            $resto = $dividendo % $divisor;

            echo "<p>Dividendo: <b>$dividendo</b></p>";
            echo "<p>Divisor: <b>$divisor</b></p>";
            echo "<p>Quociente: <b>$quociente</b></p>";
            echo "<p>Resto: <b>$resto</b></p>";
        ?>
    </section>

</body>
</html>