<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando tempo</title>
    <link rel="stylesheet" href="style11.css">
</head>
<body>
    <?php 
        $total = $_GET["segundos"] ?? 0;
        $sobra = $total;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Segundos para conversão de tempo</label><br><br>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>"><br><br>

            <button>Converter</button>
        </form>
    </main>

    <section>
        <?php 
            $semanas = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;

            $dias = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;

            $horas = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
 
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;

            $segundos = $sobra;

            echo "<p><b>" . number_format($total, 2, ",", ".") . "</b> Segundos equivalem a:</p>";
            echo "<p><b>$semanas</b> semanas</p>";
            echo "<p><b>$dias</b> dias</p>";
            echo "<p><b>$horas</b> horas</p>";
            echo "<p><b>$minutos</b> minutos</p>";
            echo "<p><b>$segundos</b> segundos</p>";
        ?>
    </section>
</body>
</html>