<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional SWITCH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;
        $oper = $_GET["oper"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Digite um número:</label><br><br>
            <input type="number" name="num" id="num" value="<?=$num?>"><br><br>
            <label for="oper">(d)obro/(c)ubo/(q)uadrado/(r)aíz:</label>
            <input type="text" name="oper" id="oper" value="<?=$oper?>"><br><br>

            <button>Calcular</button>
        </form>
    </main>

    <section>
        <?php 
            switch ($oper){

                case 'd': //caso o valor de $oper sejá esse...
                    $num *= 2; //...multiplicará o valor de $num por 2
                    echo "<p>$num</p>";
                    break; //indica fim do programa

                case 'c': //caso seja esse...
                    $num = pow($num, 3); //...elevará $num ao cubo
                    echo "<p>$num</p>";
                    break;

                case 'q': //caso seja esse...
                    $num = pow($num, 2); //...elevará o $num ao quadrado
                    echo "<p>$num</p>";
                    break;

                case 'r': //caso esse...
                    $num = sqrt($num); //...será feita a raíz quadrada de $num
                    echo "<p>$num</p>";
                    break;

                default : //funciona como um else (senão)
                    echo "<p>ERRO</p>";
            }
        ?>
    </section>

</body>
</html>