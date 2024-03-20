<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de média IF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nota1 = $_GET["nota1"] ?? 0;
        $nota2 = $_GET["nota2"] ?? 0;
        $media = ($nota1 + $nota2) / 2;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nota1">Informe a N1: </label><br><br>
            <input type="number" name="nota1" id="nota" value="<?=$nota1?>" max="10" step="0.1"><br><br>

            <label for="nota2">Informe a N2: </label><br><br>
            <input type="number" name="nota2" id="nota" value="<?=$nota2?>" max="10" step="0.1"><br><br>

            <button>Média</button>
        </form>
    </main>

    <section>
        <?php 
            if ($media >= 7 && $media <= 10){
                echo "<p>O aluno foi aprovado por média.</p>";
            }
            elseif ($media >= 5 && $media <= 6.99){
                echo "<p>O aluno foi para a final.</p>";
            }
            elseif ($media < 5){
                echo "<p>O aluno foi reprovado.</p>";
            }
            else{
                echo "<p>Informe a nota novamente.</p>";
            }
        ?>
    </section>

</body>
</html>