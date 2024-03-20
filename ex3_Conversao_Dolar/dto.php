<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão para dólar desafio</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <header>
        <h1>Aqui está o resultado</h1><br><br>
    </header>

    <?php 
        $numero = $_GET["numero"];
        $dolar = $numero / 4.93;
        echo "R\$ $numero real(is) convertido(s) em dólar(es), é: US\$ ". number_format($dolar, 2, ",", ".") ."</br></br>";

        //formatação internacinalizada

        // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // echo "Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
    ?>
        
    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
    
</body>
</html>