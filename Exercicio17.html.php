<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Introduce un número: <input type="text" name="numero" autofocus/><br/>
    <input type="submit" name="Enviar">
    </form>

    <?php
        $numero = $_REQUEST['numero'];
    if ($numero > 0) {
        $suma= 0;
        for ($i=$numero+1; $i < $numero + 101 ; $i++) { 
        
            $suma += $i;
        }
        echo "$suma";
    }else {
            echo "el número no es positivo";
    }
    ?>
</body>
</html>