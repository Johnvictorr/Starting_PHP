<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas com parâmetros dinâmicos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <?php 
        function soma(){
            $pegar = func_get_args(); //pega todos os argumentos e coloca dentro de um vetor e os posiciona
            $total = func_num_args(); //número total de argumentos existentes
            $soma = 0;
            for ($i = 0;$i < $total;$i++){
                $soma += $pegar[$i];
            }
            return $soma;
        }
        $result = soma(10, 11, 11, 15, 23);
        echo "<p>Soma = $result</p>";
        
        ?>
    </section>
</body>
</html>