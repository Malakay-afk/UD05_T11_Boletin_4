<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 4 - exercicio 10</title>
</head>
<body> 
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label for="numero">Escribe un numero</label>
        <input type="number" value="numero" name="numero">
        <input type="submit" value="enviar">
</form>
<table border="10">
<?php
          $n = $_POST['numero'];
               for ($i=0; $i <= 10 ; $i++) { 
                   $multiplicacion = $n * $i;
                   echo "<tr><td>"."$multiplicacion <br>"."</tr></td>";
               }
?>
</table>
</body>
</html>