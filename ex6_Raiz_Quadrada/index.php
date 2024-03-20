<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíz quadrada e cúbica</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    
    <main>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="numero">Informe um número</label><br><br>
            <input type="number" name="numero" id="numero"><br><br>

            <button>Enviar</button>

        </form>

    </main>

    <section>

        <?php 
            $raiz = $_GET["numero"] ?? 0;
            echo "<p>O número escolhido foi <b>$raiz</b></p>";

            $quadrada = $raiz ** (1/2); // ou sqrt()
            echo "<p>A raíz quadrada do número escolhido é: <b>$quadrada</b></p>";

            $cubica = $raiz ** (1/3);
            echo "<p>A raíz cúbica do número escolhido é: <b>$cubica</b></p>";
        ?>

    </section>

</body>
</html>