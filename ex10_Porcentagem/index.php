<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reajuste = $_GET["reajuste"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Informe o preço atual</label><br><br>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>" value="<?=$preco?>"><br><br><br>

            <label for="reajuste">De quanto será o reajuste? (<b><span id="percentual">?</span>%</b>)</label><br><br>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>"><br><br>

            <button>Reajustar</button>
        </form>
    </main>

    <section>
        <?php 
            $aumento = ($preco * $reajuste) / 100;
            $novopreco = $preco + $aumento;

            echo "<p>O produto que custava R\$<b>" . number_format($preco, 2, ",", ".") . "</b>, com o reajuste de <b>$reajuste</b>%, terá um aumento de R\$<b>" . number_format($aumento, 2, ",", ".") . "</b>, e passará a custar R\$<b>" . number_format($novopreco, 2, ",", ".") . "</b></p>"
        ?>
    </section>

    <script>
        mudaValor()

        function mudaValor() {
            percentual.innerText = reajuste.value;
        }
    </script>
</body>
</html>