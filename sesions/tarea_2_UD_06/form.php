 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario</title>
 </head>

 <body>
     <!--
        Escribid un formulario que solicite nombres y los almacene en una sesión hasta que el usuario cierre la sesión.
        El formulario contiene un campo para escribir un nombre una o varias palabras.
        El formulario muestra los nombres que se han escrito anteriormente.
        La página contiene un enlace para cerrar la sesión.
    -->
    <?php
    //Iniciamos la session para poder ver el usuario actual, si no seria imposible.
        session_start();
        ?>
        

     <form action="act_form.php" method="POST">
         <label for="fname">Nombre 1:</label><br>
         <input type="text" id="name1" name="name1" value=""><br>
         <label for="fname">Nombre 2:</label><br>
         <input type="text" id="name2" name="name2" value=""><br>
         <input type="submit" value="Submit">
     </form>
     <?php
        //usamos el session con el usuario para mostrar de nuevo el usuario que esta en la pagina de form
        if (isset($_SESSION['usuario2']) && !empty($_SESSION['usuario2'])) {
            echo "El usuario logueado anteriormente es: " . $_SESSION['usuario2'] . "<br><br>";
            echo "Actualizar la página eliminara la sesion existente";
            session_destroy();
        } else {
            echo "<br>Usuario sin loguear: ";
        }

        ?>
 </body>

 </html>