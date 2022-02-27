<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Potencia de un número</h1>
    
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <p>Escriba la base&nbsp;&nbsp;&nbsp;<input type="number" name="base"><br></p>
    <p>Escriba el expontente <input type="number" name="expontente"></p><br>
    <input type="submit" value="enviar"><br><br>
</form>
    <?php
        $base=$_POST['base'];
        $expontente=$_POST['expontente'];
        $potencia=pow($base,$expontente);
        
        echo "La potencia de $base elevado a $expontente es =>>> "."<b>$potencia</b>";
    ?>
</body>
</html>






















