<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Información recibida del formulario es la siguiente</h1>
        <?php
            var_dump($_POST);  
            echo '<br>';
            echo "El nombre recibido es: " . $_POST["nombre"] . "<br>";    
            echo "El apellido recibido es: " . $_POST["apellido"] . "<br>";    
            echo "La edad recibida es: " . $_POST["edad"];  
        ?>
    </body>
</html>