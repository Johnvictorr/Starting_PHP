<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de salário mínimo</title>
    <link rel="stylesheet" href="style9.css">
</head>
<body>
    <?php 
        $minimo = 1_412.00;
    ?>
    
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Informe o seu salário</label><br><br>
            <p>Considerando o salário mínimo de <b>R$<?=number_format($minimo, 2, ",", ".")?></b></p>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>"><br><br>

            <button>Enviar</button>
        </form>
    </main>

    <section>
        <?php 
            $salario = $_GET["salario"] ?? $minimo;
            $total = (int)($salario / $minimo);
            $diferenca = $salario % $minimo;

            echo "<p>Seu salário é: <b>" . number_format($salario, 2, ",", ".") . "</b></p>";
            echo "<p>Você ganha o equivalente à: <b>$total</b> salário(s) mínimo(s) + <b>" . number_format($diferenca, 2, ",", ".") . "</b></p>";
        ?>
    </section>

</body>
</html>