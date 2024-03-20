<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preço"] ?? 0;
        $desconto = $_GET["desconto"] ?? 0;
    ?>
    
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preço">Informe o preço do produto: </label><br><br>
            <input type="number" name="preço" id="preço" value="<?=$preco?>" step="0.01"><br><br>

            <label for="desconto">informe o valor do desconto: </label><br><br>
            <input type="number" name="desconto" id="desconto" value="<?=$desconto?>"><br><br>
            
            <button>Enviar</button>
        </form>
    </main>

    <section>
        <?php 
            $novopreco = $preco - ($preco * $desconto / 100);

            echo "<p>O valor do produto que era de R$" . number_format($preco, 2, ",", ".") . ", com os $desconto% de desconto, agora ficou por R$" . number_format($novopreco, 2, ",", ".") . "</p>";
            //number_format é um formato de número com separação de milhar/milhão/etc e decimais
        ?>
    </section><br>

    <section>
        <?php 
            $novopreco2 = $preco + ($preco * $desconto / 100);

            echo "<p>O valor do produto que era de R$" . number_format($preco, 2, ",", ".") . ", com os $desconto% de acréscimo, agora ficou por R$" . number_format($novopreco2, 2, ",", ".") . "</p>";
        ?>
    </section>

</body>
</html>