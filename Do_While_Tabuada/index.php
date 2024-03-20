<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de tabuada com DOWHILE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num = $_GET["num"] ?? 0;
        $oper = $_GET["oper"];
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Digite um número</label><br><br>
            <input type="number" name="num" id="num"><br><br>

            <label for="oper">Operador: (+), (-), (*), (/)</label><br><br>
            <input type="text" name="oper" id="oper" required><br><br>

            <button>Resultado</button>
        </form>
    </main>

    <section>
        <?php 
            switch ($oper){

                case '+':
                $parcela = 0;
                do{
                    $parcela += 1;
                    $soma = $num + $parcela;
                    echo "<p>$num + $parcela = $soma</p>";
                } while ($parcela < 10);
                break;

                case '-':
                $subtraendo = 0;
                do{
                    $subtraendo += 1;
                    $subt = $num - $subtraendo;
                    echo "<p>$num - $subtraendo = $subt</p>";
                } while ($subtraendo < 10);
                break;

                case '*':
                $fator = 0;
                do{
                    $fator += 1;
                    $mult = $num * $fator;
                    echo "<p>$num * $fator = $mult</p>";
                } while ($fator < 10);
                break;

                case '/':
                $divisor = 0;
                do{
                    $divisor += 1;
                    $divi = $num / $divisor;
                    echo "<p>$num / $divisor = " . intval($divi) . "</p>";
                } while ($divisor < 10);
                break;

                default:
                    echo "<p>ERRO</p>";
            }
        ?>
    </section>

</body>
</html>