<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre Equipo</th>
            <th>Nombre</th>
        </tr>
<?php 
include 'lista.php';

# Volcamos a la variable lo obtenido por el formulario.
$Equipo = $_POST['player'];
# Instanciamos el objeto y creamos la conexión.
$equipoNBA = new Lista();
echo 'El equipo selecionado es: '.$Equipo.'<br><br>';
# Funcion para que nos devuelva los resultados.
    $resultadosEquipo = $equipoNBA->devolverResultado($Equipo);
    foreach($resultadosEquipo as $filaEquipo){
        echo '<tr>';
        echo '<td>'.$filaEquipo['Nombre_equipo'].'</td>';
        echo '<td>'.$filaEquipo['Nombre'].'</td>';
        echo '</tr>';
    }
?>
    </table>
</body>
</html>