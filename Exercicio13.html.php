php<?php
  session_name('')
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivos e negativo</title>
</head>
  <body>
    <?php
      <form action="<?php echo $_SHELF">
        if(!isset($_SESSION['intentos'])){
          $_SESSION['intentos']=0;
          $_SESSION['positivos']=0;
          $_SESSION['negativos']=0;
        }else{
          $_SESSION['intentos']++;
        }
        if($_SESSION['intentos']<9){
          if(isset($_POST[numero] && filter_var($_POST['numero'] FILTER_VALIDATE_INT)){
            if($_POST['numero']<0){
              $_SESSION['negativos']++;
            }else{
              $_SESSION['positivos']++;
            }
          }
        }
      }

      <?php
      // Inicializar la sesión.
      // Si está usando session_name("algo"), ¡no lo olvide ahora!
      session_start();
      
      // Destruir todas las variables de sesión.
      $_SESSION = array();
      
      // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
      // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
      if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 42000,
              $params["path"], $params["domain"],
              $params["secure"], $params["httponly"]
          );
      }
      
      // Finalmente, destruir la sesión.
      session_destroy();
      ?>
      

    ?>
  </body>
</html>