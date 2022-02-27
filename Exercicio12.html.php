<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Fibonacci</h1>
    
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="numero">Escribe el número de términos que quieres que aparezcan de la serie de FIBONACCI</label>
        <input type="number" name="numero">
        <input type="submit" value="enviar"><br>
</form>
    <?php
     $n = $_POST['numero'];
        $fbcero= 0;
        $fibun = 1;
        for ($i= 0; $i < $n ; $i++) { 
            $fibactual=$fbcero + $fibun;
            $fbcero = $fibun;
            $fibun = $fibactual;
            echo "$fibactual <br>";

        }
    ?>
</body>
</html>






















