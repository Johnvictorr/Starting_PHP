<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        // dados do formulário
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get"> <!--o programa é mostrado na mesma pág do formulário-->

            <label for="valor1">Valor 1</label><br><br>
            <input type="number" name="v1" id="v1"] value="<?=$valor1?>"><br><br>

            <label for="valor2">Valor 2</label><br><br>
            <input type="number" name="v2" id="v2"] value="<?=$valor2?>"><br><br>

            <button>Somar</button>

        </form>
    </main>

    <section>
        <?php 
            $soma = $valor1 + $valor2;

            echo "<p>A soma é: $soma</p>";
        ?>
    </section>

</body>
</html>