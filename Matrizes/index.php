<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <section><h2>Arrays com linhas e colunas</h2>
        <pre>
            <?php 
                $matriz = array(array(3,9), //o primeiro valor marca a posição de linha, o segundo, de coluna
                                array(5,2), //aqui, na linha[0] coluna[1], está o valor 9
                                array(7,1));
                $matriz[2][1] = $matriz[0][1]; //o valor que estava na linha[2] coluna[1] (1) será substituído pelo valor que está na linha[0] coluna[1] (9)
                print_r($matriz);
            ?>
        </pre>
    </section><br>

    <section><h2>Gerenciando os primeiros elementos de arrays</h2>
        <pre>
            <?php 
                $num = array(2,3,4,5);
                print_r($num);
                //adicionando um valor no primeiro lugar da array
                array_unshift($num, 1);
                array_shift($num); //aqui, ele desalocará o primeiro valor da array e alterar o índice dos elementos
                print_r($num);
                //para adicionar elementos ao final da array, o comando é "array_push"
                //para desalocar elementos ao final da array, o comando é "array_pop"
                //ou pode apenas adicionar um novo valor e na hora de desalocar, usa o "unset($num[posição])"
            ?>
        </pre>
    </section><br>

    <section><h2>Ordem de arrays: sort() e rsort()</h2>
        <pre>
            <?php 
                $n = array(5,3,4,2);
                print_r($n);
                sort($n); //colocará os elementos em ordem crescente
                print_r($n);
                //caso queira na ordem decrescente...
                rsort($n);
                print_r($n);
            ?>
        </pre>
    </section><br>

    <section><h2>Ordem de arrays associativa: asort() e arsort()</h2>
        <pre>
            <?php 
                $valor = array(5,3,4,2);
                print_r($valor);
                asort($valor); //colocará os elementos em ordem crescente alterando seus índices também
                print_r($valor);
                //caso queira na ordem decrescente...
                arsort($valor);
                print_r($valor);
            ?>
        </pre>
    </section><br>

    <section><h2>Ordem por chaves: ksort() e krsort()</h2>
        <pre>
            <?php 
                $val = array(3=>5,0=>3,2=>4,1=>2);
                print_r($val);
                ksort($val); //ordena os índices de forma crescente
                print_r($val);
                //caso queira na ordem decrescente...
                krsort($val);
                print_r($val);
            ?>
        </pre>
    </section>
</body>
</html>