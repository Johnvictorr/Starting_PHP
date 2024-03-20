<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que dia tem aula SWITCH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $dia = $_GET["dia"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="dia">Informe o dia da semana</label><br><br>
            <input type="number" name="dia" id="dia" value="<?=$dia?>" min="1" max="7"><br><br>

            <button>Analisar</button>
        </form>
    </main>

    <section>
        <?php 
            switch ($dia){
                case 1:
                    echo "<p>O dia é Domingo. Você não tem aula hoje.</p>";
                    break;

                case 2:
                    echo "<p>O dia é Segunda-Feira. Você tem aula hoje.</p>";
                    break;

                case 3:
                    echo "<p>O dia é Terça-Feira. Você tem aula hoje.</p>";
                    break;

                case 4:
                    echo "<p>O dia é Quarta-Feira. Você tem aula hoje.</p>";
                    break;

                case 5:
                    echo "<p>O dia é Quinta-Feira. Você tem aula hoje.</p>";
                    break;

                case 6:
                    echo "<p>O dia é Sexta-Feira. Você tem aula hoje.</p>";
                    break;

                case 7:
                    echo "<p>O dia é Sábado. Você não tem aula hoje.</p>";
                    break;

                default:
                    echo "<p>Informe o dia corretamente.</p>";
            }
        ?>
    </section>

</body>
</html>