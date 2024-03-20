<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadres aritméticos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <Section>
        <?php 
            $oper = 50 / 2 + 3 ** 2;
            echo "<p>O resultado é: $oper</p>";

            //com parênteses, o resultado é diferente, pois, resolve-se primeiro o que tem dentro deles

            $oper = 50 /(2 + 3) ** 2;
            echo "<p>O resultado é: $oper</p>";

            //na hieraquia de expresões aritméticas do php, primeiro se resolve o que tem dentro dos parênteses
            //depois se resolve todas as potências
            //em seguida, as multiplicações, divisões e restos (da esquerda para a direita)
            //e por fim, as somas e subtrações (também da esquerda para a direita)

            //OPERAÇÕES ARITMÉTICAS

            //ABS: deixam os valores selecionados, positivos

            $oper = abs(-30);
            echo "<p>O valor absoluto é: $oper</p>";

            //BASE_CONVERT: convertem valores binários, decimais e hexadecimais

            $oper = base_convert(1011, 2, 16);
            echo "<p>O valor binário de base 2 convertido para hexadecimal é: $oper</p>";

            //CEIL: arredonda valor real para cima

            $oper = ceil(25 / 2);
            echo "<p>Arredondando o valor para CIMA temos: $oper</p>";

            //FLOOR: arredonda valor real para baixo

            $oper = floor(25 / 2);
            echo "<p>Arredondando o valor para BAIXO temos: $oper</p>";

            //ROUND: arredondamento aritmético padrão

            $oper = round(25 / 2);
            echo "<p>Arredondando o valor temos: $oper</p>";

            //HIPOTENUSA

            $oper = hypot(50, 15);
            echo "<p>O valor da hipotenusa é: $oper</p>";

            //INTDIV: divisão com resultado de valor inteiro

            $oper = intdiv(25, 2);
            echo "<p>O valor inteiro da divisão é: $oper</p>";

            //MIN: descobrir o valor mínimo de uma sequência

            $oper = min(25, 14, 89);
            echo "<p>O valor mínimo da sequência é: $oper</p>";

            //MAX: descobrir o valor máximo de uma sequência

            $oper = max(25, 14, 89);
            echo "<p>O valor máximo da sequência é: $oper</p>";

            //PI

            $oper = pi();
            echo "<p>O valor de pi é: $oper</p>";

            //também existem funções para SEN, COS E TAN (pesquisar caso necessário)

            //SQRT: raíz quadrada

            $oper = sqrt(9);
            echo "<p>A raíz quadrada do número escolhido é: $oper</p>";

            //ou

            $oper = 9 ** (1/2);
            echo "<p>A raíz quadrada do número escolhido é: $oper</p>";

            //e no caso de raíz cubica...

            $oper = 9 ** (1/3);
            echo "<p>A raíz cubica do número escolhido é: $oper</p>";

        ?>
    </Section>

</body>
</html>