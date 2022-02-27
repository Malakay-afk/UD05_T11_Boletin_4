<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 4 - exercicio 11</title>
</head>
<body> 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="numero">Escribe un numero</label>
        <input type="number" name="numero">
        <input type="submit" value="enviar">
</form>
<table border="1">
<?php
          $n = $_POST['numero'];
               for ($i= $n; $i <= $n + 4 ; $i++) { 
                   $cuadrado = $i * $i;
                   $cubo = $i * $i * $i;
                   echo "<tr><td>cuadrado y cubo de: $n</td>";
                   echo "<td>"."$cuadrado <br>"."</td>";
                   echo "<td>"."$cubo <br>"."</tr></td>";
               }
?>
</table>
</body>
</html>