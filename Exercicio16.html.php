<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
    <?php
        for ($numero=2; $numero<=100 ; $numero++) {
            $esPrimo = true;
        for ($divide = 2; $divide < $numero; $divide++) {
            if($numero % $divide == 0) {
            $esPrimo = false;
            }
        }
        if($esPrimo){
            echo "$numero <br>";
        }
    }


    ?>
</body>
</html>