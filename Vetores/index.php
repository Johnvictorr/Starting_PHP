<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <section><h2>Arrays</h2>
        <pre>
            <?php 
                $num = array(1, 2, 3, "..."); //local de armazenamento de vetores
                $num[] = "START"; //adicionando valor na array
                print_r($num);
            ?>
        </pre>
    </section><br>

    <section><h2>Range</h2>
        <pre>
            <?php 
                $num1 = range(2,20,2); //2 - início, 20 = fim, 2 = passos (contará de 2 em 2 do início ao fim)
                print_r($num1)

            ?>
        </pre>
    </section><br>

    <section><h2>Foreach</h2>
            <table border="1"><tr> <!-- criação de tabela simples em html -->
                <?php 
                    $num2 = range(2,20,2);
                    foreach($num2 as $valor){ //para cada elemento de $num2 tratado como $valor...
                        echo "<td>$valor "; //... mostre o valor na tela a cada repetição
                    }
                    ?>
            </table>
    </section><br>

    <section><h2>Chaves personalizadas</h2>
            <pre>
                <?php 
                    $num3 = array(0=>5, 4=>4, 7=>20, 19=>8); //você pode escolher as posições de vetores
                    $num3[] = 7; //caso queira adicionar mais um valor a sua array
                    //o vetor adicionado, será posto na posição após a última (nesse caso, na posicão 20)
                    unset($num3[0]); //destruindo o vetor de posição 0 (o número 5)
                    print_r($num3); //na hora do print, o programa só irá mostrar as posições escolhidas (0, 4, 7, e 19)
                ?>
            </pre>
    </section><br>

    <section><h2>Chaves associativas</h2>
            <pre>
                <?php 
                    $v = array("nome"=>"John", "idade"=>19, "peso"=>94.4); //valores inteiros de array viraram strings
                    $v["estuda"] = true; //adicionando mais um valor
                    foreach($v as $chave => $valor){
                        echo "<p>O vetor $valor ocupa o espaço $chave</p>";
                    }
                ?>
            </pre>
    </section><br>
</body>
</html>