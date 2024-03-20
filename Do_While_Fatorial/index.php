<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de fatorial com DOWHILE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num = $_GET["num"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Digite um número</label><br><br>
            <input type="number" name="num" id="num"><br><br>

            <button>Fatorial</button>
        </form>
    </main>

    <section>
        <?php 
            $cont = $num;
            $fatorial = 1;

            do{
                $fatorial *= $cont;
                $cont--;
            } 
            while ($cont >= 1);
                echo "<p>$num! = " . number_format($fatorial, 2, ",", ".") . "</p>";
        ?>
    </section>

</body>
</html>