<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style12.css">
</head>
<body>
    <?php 
        $saque = $_GET["sacar"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="sacar">Quanto deseja sacar?</label><br><br>
            <input type="number" name="sacar" id="sacar" value="<?=$saque?>" step="5"><br><br>

            <button>Sacar</button>
        </form>
    </main>

    <section>
        <?php 
            $resto = $saque;

            $cem = floor($resto / 100);
            $resto %= 100;

            $cinquenta = floor($resto / 50);
            $resto %= 50;

            $dez = floor($resto / 10);
            $resto %= 10;

            $cinco = floor($resto / 5);
            $resto %= 5;

            echo "<p>Saque de <b>R\$" . number_format($saque, 2, ",", ".") . "</b> realizado, você deverá receber:</p>";
            echo "<p><b>$cem</b> notas de R\$100,00</p>";
            echo "<p><b>$cinquenta</b> notas de R\$50,00</p>";
            echo "<p><b>$dez</b> notas de R\$10,00</p>";
            echo "<p><b>$cinco</b> notas de R\$5,00</p>";
        ?>
    </section>
</body>
</html>