 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario</title>
 </head>

 <body>
     <!--
        Queremos mostrar en todo momento el último nombre introducido a través de formulario. Para ello generaremos dos páginas php:
        • La primera tendrá un formulario que nos pida nuestro nombre.
        • La segunda  recogerá  el  nombre  introducido  y  lo  almacenará  en  la variable de sesión. En  todo  momento,  tanto  en
          el  formulario  como  en  la  segunda  página  se mostrará el último nombre introducido.
    -->
     <!-- Iniciamos la session para que aparezca el usuario anterior.-->
     <?php
     
        //Iniciamos la session para poder ver el usuario actual, si no seria imposible.
        session_start();
        ?>

     <form action="act_form.php" method="POST">
         <label for="fname">Nombre:</label><br>
         <input type="text" id="name" name="name" value=""><br>
         <input type="submit" value="Submit">
     </form>
     <?php
        //usamos el session con el usuario para mostrar de nuevo el usuario que esta en la pagina de form
        if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
            echo "El usuario logueado anteriormente es: " . $_SESSION['usuario'] . "<br><br>";
            echo "Actualizar la página eliminara la sesion existente";
            session_destroy();
        } else {
            echo "<br>Usuario sin loguear: ";
        }

        ?>

 </body>

 </html>