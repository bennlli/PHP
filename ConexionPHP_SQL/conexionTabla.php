<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
# Creamos la conexcion
$mysqli = new mysqli("localhost", "root", "","alumnos",3306);
if($mysqli->connect_errno){
    # Hubo un ERROR
    echo 'Fallo al conectar a MySQL: ('.$mysqli->connect_errno. ')'.$mysqli->connect_error;
}else{
    # Conexion CORRECTA
    echo '<h3>Conexion realizada exitosamente</h3><br><hr>';
}
# Informacion de Host
echo $mysqli->host_info .'\n<br><br>';
?>
    <table>
    <tr style="background: #CCC">
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>        
    </tr>
<?php 
$resultado = $mysqli->query("SELECT * FROM alumnos");
# Usamos un for para recorrer cada columna y que nos proporcione la informacion de su interior
    for ($i=0; $i <$resultado->num_rows ; $i++) { 
        # Usamos 'fetch_assoc()' para extraer el dato de cada posición como si fuese un 'array asociativo'
        $fila = $resultado->fetch_assoc();
        echo '<tr><td>'.$fila['id'].'</td>';
        echo '<td>'.$fila['nombre'].'</td>';
        echo '<td>'.$fila['apellidos'].'</td>';
        echo '<td>'.$fila['edad'].'</td></tr>';
    }
?>
    </table>
</body>
</html>