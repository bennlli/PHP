<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
# Include para poder usar las funciones y demas cosas.
include 'resultados.php';
    # Creamos la estancia del objeto para hacer la conexión.
    $resultado = new Resultados();
    # Volcamos los resultados de la función en '$tabla'
    $tabla=$resultado->valoresOption();
?>
    <form action="resultadosForm.php" method="POST">
        <label for="nba">Elige un equipo: <br><br></label>
            <select name="nba" id="nba">
                <?php 
                foreach($tabla as $fila){
                    echo'<option value="'.$fila['Nombre'].'">'.$fila["Nombre"].'</option>';
                }
                ?>
            </select><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>