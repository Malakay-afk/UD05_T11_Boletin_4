<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boletín 4 - exercicio 7</title>
</head>
<body>   

    <?php
         $combinacionSecreta = "1111";
        if((isset($_POST['intentos']) && intval($_POST['intentos'])<4) || !isset($_POST['intentos'])) { 
    ?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="combinacion">Combinación</label>
        <input type="hidden" name="intentos" value="<?php
            if(!isset($_POST['intentos'])){
                echo "0";
            }else{
                echo intval($_POST['intentos'])+1;
            }
    ?>">
        <input type="number" name="combinacion"><br>
        <input type="submit" value="Enviar">

</form>
<?php   
         if(isset($_POST['combinacion']) &&
            filter_var(
                $_POST['combinacion'],
                FILTER_VALIDATE_REGEXP,
                array("options"=>array("regexp"=>"/[0-9]{4}/"))
            )
        ){
            if($_POST['combinacion'] == $combinacionSecreta){
                echo "<p>La caja fuerte se ha abierto satisfactoriamente</p>";
            }else{
                echo "<p>Lo siento esta no es la combinación</p>";
            }

        }else{
            echo "<p>introduce un número de 4 díxitos</p>";
        }
    }else if(isset($_REQUEST['intentos'])){
    echo "<p>superaches o número de 4 intentos</p>";
        }
    ?>
</body>
</html>