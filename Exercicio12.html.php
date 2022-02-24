<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Multiplos del 5</h1>
    <?php
        $fbcero= 0;
        $fibun = 1;
        for ($i=2; $i < 500 ; $i++) { 
            $fibactual=$fbcero + $fbun;
            echo "$fibactual <br>";
            $fbcero = $fibun;
            $fibun = $fibactual;
        }
    ?>
</body>
</html>






















