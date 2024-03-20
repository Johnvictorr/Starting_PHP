<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem por valor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <?php 
            function teste($num){
            $num += 2;
            echo "<p>$num</p>";
            }

            $num2 = 1;
            teste($num2);
            echo "<p>$num2</p>"
        ?>
    </section>
    

</body>
</html>
