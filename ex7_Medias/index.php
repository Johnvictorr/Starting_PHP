<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de médias</title>
    <link rel="stylesheet" href="style7.css">
</head>
<body>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nota1">N1</label><br><br>
            <input type="number" name="nota1" id="nota1" step="0.1"><br><br>

            <label for="peso1">1º peso</label><br><br>
            <input type="number" name="peso1" id="peso1"><br><br>

            <label for="nota2">N2</label><br><br>
            <input type="number" name="nota2" id="nota2" step="0.1"><br><br>

            <label for="peso2">2º peso</label><br><br>
            <input type="number" name="peso2" id="peso2"><br><br>

            <button>Ver média</button><br>
        </form>
    </main>

    <section>
        <?php 
            $nota1 = $_GET["nota1"] ?? 0;
            $nota2 = $_GET["nota2"] ?? 0;
            $simples = ($nota1 + $nota2) / 2;

            echo "<p>Média aritmética simples: <b>$simples</b></p>";

            $peso1 = $_GET["peso1"] ?? 0;
            $peso2 = $_GET["peso2"] ?? 0;
            $ponderada = ($peso1 * $nota1 + $peso2 * $nota2) / ($peso1 + $peso2);

            echo "<p>Média aritmética ponderada: <b>$ponderada</b></p>";
        ?>
    </section>

</body>
</html>