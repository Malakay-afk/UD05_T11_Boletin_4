<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio11</title>
</head>
<body>

<form action="<?php echo $_REQUEST['PHP']?>" method="post">
        <p>Numero: <input type="text" name="numero"></p>
        <input type="submit" value="enviar">
</form>
    <?php
        echo end(str_split($_REQUEST['numero']));
    ?>
</body>
</html>