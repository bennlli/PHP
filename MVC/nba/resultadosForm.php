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
            <th>Equipo local</th>
            <th>Equipo visitante</th>
            <th>Ptos local</th>
            <th>Ptos visitante</th>
        </tr>
<?php 
include 'resultados.php';
# Volcamos a la variable lo obtenido por el formulario.
$Equipo = $_POST['nba'];
# Instanciamos el objeto y creamos la conexión.
$equiposNBA = new Resultados();
echo 'El equipo selecionado es: '.$Equipo.'<br><br>';
# Funcion para que nos devuelva los resultados.
    $resultadosNBA = $equiposNBA->devolverResultado($Equipo);
    foreach($resultadosNBA as $filaNBA){
        echo '<tr>';
        echo '<td>'.$filaNBA['equipo_local'].'</td>';
        echo '<td>'.$filaNBA['equipo_visitante'].'</td>';
        echo '<td>'.$filaNBA['puntos_local'].'</td>';
        echo '<td>'.$filaNBA['puntos_visitante'].'</td>';
        echo '</tr>';
    }
?>
    </table>
</body>
</html>

