<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com FOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num = $_GET["num"] ?? 0;
        $oper = $_GET["oper"];
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">DIGITE UM NÚMERO</label><br><br>
            <input type="number" name="num" id="num" required><br><br>

            <label for="oper">OPERADOR (+)|(-)|(*)|(/)</label><br><br>
            <input type="text" name="oper" id="oper"><br><br>

            <button>Calcular</button>
        </form>
    </main>

    <section>
        <?php 
            switch($oper){
                case '+':
            
                    for($parcela = 1;$parcela <= 10; $parcela++){
                        $soma = $num + $parcela;
                        echo "<p>$num + $parcela = $soma</p>";
                    }
                    break;

                case '-':

                    for ($subtraendo = 1;$subtraendo <= 10;$subtraendo++){
                        $subt = $num - $subtraendo;
                        echo "<p>$num - $subtraendo = $subt</p>";
                    }
                    break;

                case '*':

                    for ($fator = 1;$fator <= 10;$fator++){
                        $mult = $num * $fator;
                        echo "<p>$num * $fator = $mult</p>";
                    }
                    break;
                
                case '/':

                    for ($dividendo = 1;$dividendo <= 10;$dividendo++){
                        $divi = $num / $dividendo;
                        echo "<p>$num / $dividendo = $divi</p>";
                    }
                    break;
                
                default :
                    echo "<p>ERRO</p>";
            }
        ?>
    </section>
</body>
</html>