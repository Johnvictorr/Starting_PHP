<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional IF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $idade = $_GET["idade"] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="idade">Informe a sua idade: </label><br><br>
            <input type="number" name="idade" id="idade" value="<?=$idade?>"><br><br>

            <button>Enviar</button>
        </form>
    </main>

    <section>
        <?php 
            if ($idade >= 18 && $idade <= 64){  //if é um comando para o que acontecerá caso o programa obedecer o que há dentro dos parênteses              
                echo "<p>Sua idade é $idade, portanto você já pode dirigir e tem que votar obrigatóriamente.</p>";
            }
            elseif ($idade >= 16 && $idade <= 18){ //elseif é outro comando caso o programa não realize o primeiro comando (podem ter mais de um)
                echo "<p>Sua idade é $idade, portanto você já pode votar (opcional), mas ainda não pode dirigir.</p>";
            }
            elseif ($idade >= 65){
                echo "<p>Sua idade é $idade, portanto seu voto é opcional e você pode dirigir.</p>";
            }
            else { //else ´o que o programa executará caso nenhum dos if's ou elseif's sejam executados
                echo "<p>Sua idade é $idade, portanto você ainda não pode dirigir e nem votar.</p>";
            }

        ?>
    </section>
</body>
</html>