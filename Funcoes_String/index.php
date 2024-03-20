<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de string</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section><h2>FUNÇÃO printf</h2>
        <?php 
            $produto = "Leite";
            $preço = 7.9;

            printf("<p>O %s está custando R$%.2f</p>", $produto, $preço); 
            //a função já formata o número sem precisar do number_format
            //o %s é para identificação de string
            //o %.2f é para identificação de float (com 2 casas decimais)
            //o %d é para identificação de números inteiros
            //o %u é para identificação de números inteiros sem sinal de negativo

            //se fosse com o echo: echo "O $produto está custando R$ " . number_format($preço, 2, ",", ".");
        ?>
    </section><br>

    <section><h2>FUNÇÃO print_r</h2>
        <?php 
            $vetor[0] = 1; 
            $vetor[1] = 2;
            $vetor[2] = 3;

            print_r($vetor); // -> mostra a posição que se encontra cada vetor dentro da array
            //ou var_dump($vetor); -> mostra as posições dos vetores, quantas tem, e o tipo de cada uma
            //ou var_export($vetor); -> mostra a array de maneira mais simples e objetiva a respeito da sua posição
            //exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada
        ?>
    </section><br>

    <section><h2>FUNÇÃO wordwrap</h2>
        <?php 
            $texto = "<p>Exemplo de string com muitos caracteres</p>";
            $result = wordwrap($texto, 5, "<br>\n", false);
            echo ($result);
            //cria quebras de linha ou divisões em uma string em um tamanho especificado
            //dentro do script (<br>)
            //no código fonte (\n)
            //para quebrar linhas por palavra, no final deve colocar o valor lógico "false"
            //para quebrar linhas por quantidade de caracteres específica, deve colocar o limite após a variável (que no caso acima, é o 5)
        ?>
    </section><br>
    
    <section><h2>FUNÇÃO strlen, trim, ltrim e rtrim</h2>
        <?php 
            $txt = "   Exemplo de texto   ";
            $tamanho = strlen($txt); //Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco)
            echo "<p>($txt) tem $tamanho caracteres</p>"; //irá exibir 22 caracteres (os espaços também contam)

            //o trim elimina espaços em branco antes e depois de uma string
            //$novo = trim($txt);
            //echo $novo;
            //echo (strlen($txt));

            //no ltrim, removerá todos os espaços da esquerda que $txt possui (l de "left")
            //ltrim($txt);
            //no rtrim, removerá todos os espaços da direita que $txt possui (r de "right")
            //rtrim($txt);
        ?>
    </section><br>

    <section><h2>FUNÇÃO str_word_count</h2>
        <?php 
            $text = "Curso de PHP";
            $palavras = str_word_count($text); // -> contagem de palavras dentro de uma string
            echo "<p>($text) tem $palavras palavras</p>"
        ?>
    </section><br>

    <section><h2>FUNÇÃO explode</h2>
        <?php 
            $frase = "Curso de PHP>";
            $vetor1 = explode(" ", $frase); // -> quebra uma string e coloca os itens em um vetor
            print_r($vetor1)
        ?>
    </section><br>

    <section><h2>FUNÇÃO srt_split</h2>
        <?php 
            $nome = "John Victor";
            $v1 = str_split($nome); // -> coloca cada letra de uma string em uma posição de um vetor
            print_r($v1)
        ?>
    </section><br>

    <section><h2>FUNÇÃO implode</h2>
        <?php 
            $vet[0] = "<p>Olá";
            $vet[1] = "meu";
            $vet[2] = "nome";
            $vet[3] = "é";
            $vet[4] = "John</p>";

            $john = implode("_", $vet); // -> dentro das aspas contém o caractere separador de vetores...
            print($john); //...e irá transformar um vetor inteiro em uma string
        ?>
    </section><br>

    <section><h2>FUNÇÃO join</h2>
        <?php 
            $vet[0] = "<p>Olá";
            $vet[1] = "meu";
            $vet[2] = "nome";
            $vet[3] = "é";
            $vet[4] = "John</p>";

            $john = join("_", $vet); // -> dentro das aspas contém o caractere separador de vetores
            print($john);
        ?>
    </section><br>

    <section><h2>FUNÇÃO chr</h2>
        <?php 
            $letra = chr(64); //retorna um caractere de acordo com seu código ASCII passado como parâmetro
            echo "<p>A letra de código 64 é $letra</p>";
        ?>
    </section><br>

    <section><h2>FUNÇÃO ord</h2>
        <?php 
            $caractere = "@";
            $codigo = ord($caractere); //retorna o código ASCII de um caractere passado como parâmetro
            echo "<p>O código que representa o caractere $caractere é $codigo</p>";
        ?>
    </section><br>

    <section><h2>FUNÇÃO srtolower</h2>
        <?php 
            $nome1 = "john victor</p>";
            print("<p>Seu nome é ". strtolower($nome1)); //todos os caracteres ficarão minúsculos
        ?>
    </section><br>
        
    <section><h2>FUNÇÃO strtoupper</h2> 
        <?php 
            $nome2 = "john victor</p>";
            print("<p>Seu nome é ". strtoupper($nome2)); //todos os caracteres ficarão maiúsculos
        ?>
    </section><br>

    <section><h2>FUNÇÃO ucfirst</h2>
        <?php 
            $nome3 = "john victor</p>";
            print("<p>Seu nome é ". ucfirst($nome3)); //o primeiro caractere ficará maiúsculo
            //print("<p>Seu nome é ". ucfirst(strtolower($nome3)); (para deixar apenas a primeira letra em caixa alta)
        ?>
    </section><br>

    <section><h2>FUNÇÃO ucwords</h2>
        <?php 
            $nome4 = "john victor</p>";
            print("<p>Seu nome é ". ucwords($nome4)); //o primeiro caractere de cada palavra ficará maiúsculo
        ?>
    </section><br>

    <section><h2>FUNÇÃO strrev</h2>
        <?php 
            $nome5 = "john victor";
            print("<p>Seu nome é</p> ". strrev($nome5)); //inverte a ordem das letras de cada palavra
        ?>
    </section><br>

    <section><h2>FUNÇÃO strpos</h2>
        <?php 
            $txt1 = "Curso de PHP";
            $posiçao = strpos($txt1, "PHP"); //encontra a posição de onde a palavra começa
            echo "<p>Na frase ($txt1), a string selecionada encontra-se na posição $posiçao</p>"
        ?>
    </section><br>
        
    <section><h2>FUNÇÃO stripos</h2>
        <?php 
            $txt2 = "Curso de PHP";
            $posiçao = stripos($txt2, "php"); //encontra a posição de onde a palavra começa ignorando o case sensitive
            echo "<p>Na frase ($txt2), a string selecionada encontra-se na posição $posiçao</p>"
        ?>
    </section><br>

    <section><h2>FUNÇÃO substr_count</h2>
        <?php 
            $txt3 = "Olá, me chamo john assim como meu pai que também se chama john";
            $cont = substr_count($txt3, "john"); //serve para contar a quantidade de vezes que uma palavra foi citada
            echo "<p>Na frase ($txt3), a palavra selecionada encontra-se $cont vezes</p>"
        ?>
    </section><br>

    <section><h2>FUNÇÃO substr</h2>
        <?php 
            $txt4 = "Olá, meu nome é john";
            $sub = substr($txt4, 0, 9); //a frase so será printada do indice 0 até o 9
            print("<p>$sub</p>");

            //$sub = substr($txt4, 9); (a frase irá começar a partir da 9° letra)
            //$sub = substr($txt4, -9); (a frase irá começar a partir da 9° letra no sentido contrário)
        ?>
    </section><br>

    <section><h2>FUNÇÃO str_pad</h2>
        <?php 
            $nome6 = "John Victor Xavier Rocha";
            $espaço = str_pad($nome6, 60, ".", STR_PAD_RIGHT); //completa as strings até o número desejado (60), colocando caracteres específicos (.)
            print("<p>Me chamo $espaço, muito prazer!</p>");

            //também contem o STR_PAD_LEFT (esquerda)
            //e o STR_PAD_CENTER (centro)
        ?>
    </section><br>

    <section><h2>FUNÇÃO str_repeat</h2>
        <?php 
            $txt5 = str_repeat("messi ", 6); //repetição da string escrita (messi), 6 vezes
            print("<p>$txt5</p>")        
        ?>
    </section><br>

    <section><h2>FUNÇÃO str_replace</h2>
        <?php 
            $txt6 = "Eu sou brasileiro";
            $novoTexto = str_replace("brasileiro", "canadense", $txt6); //troca a string por uma nova
            print("<p>$txt6</p>");
            print("<p>$novoTexto</p>");

            //como o php é case sensitive, se quiser ignorar essa norma, basta colocar "str_ireplace"
        ?>
    </section>
</body>
</html>