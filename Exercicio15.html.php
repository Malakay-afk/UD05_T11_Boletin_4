<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Base: <input type="text" name="b" autofocus/><br/>
    Potencia: <input type="text" name="p" autofocus/><br/>
    <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
    <input type="submit" name="Enviar">
    </form>

    <?php
        $base = $_REQUEST['b'];
        $potencia = $_REQUEST['p'];

        for ($i=0; $i <= $potencia ; $i++) { 
            $calculo = pow($base, $i);
            echo "$base elevado a $i=$calculo <br/>";
        }
    ?>
</body>
</html>