<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nascimento">Ano que você nasceu</label><br><br>
            <input type="number" name="nascimento" id="nascimento" min="1900" max="<?=($atual-1)?>"><br><br>

            <label for="idade_futura">Sua idade no ano de</label><br><br>
            <input type="number" name="futuro" id="futuro" min="1900"><br><br>

            <button>Calcular</button>
        </form>
    </main>

    <section>
        <?php 
            $atual = date("Y");
            $nascimento = $_GET["nascimento"] ?? 0;
            $futuro = $_GET["futuro"] ?? $atual;
            $idade_futura = $futuro - $nascimento;

            echo "<p>Você nasceu no ano de <b>$nascimento</b> e terá <b>$idade_futura</b> em <b>$futuro</b></p>"
        ?>
    </section>
    
</body>
</html>