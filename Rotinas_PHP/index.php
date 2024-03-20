<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <?php 
            function soma ($a, $b){
                $soma = $a + $b;
                echo "<p>$a + $b = $soma</p>";
            }

            soma(1, 1);
            soma(20, -34);
            soma(123, 456);
        ?>
    </section><br>

    <section>
        <?php 
            function s ($n1, $n2){
                $s = $n1 + $n2;
                return $s; //ou return $n1 + $n2, e remove a linha 27 ($s = $n1 + $n2;)
            }
            $x = 4;
            $y = -2;
            $r = s($x, $y);

            echo "<p>$x + $y = $r</p>";
        ?>
    </section>

</body>
</html>