<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista escuela</title>
</head>
<body>
    <?php
    include 'lib/escuela.php';
    # Crear el objeto de conexion;
    $escuela = new Escuela();
    
    # Recuperar los alumnos
    $resultado = $escuela->devolverAlumnos()
    ?>
    
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php
        if($resultado!=null){
            while ($fila = $resultado->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$fila['nombre'].'</td>';
                echo '<td>'.$fila['apellido'].'</td>';
                echo '<td>'.$fila['edad'].'</td>';
                echo '<tr>';
                }
            }
        ?>
    </table>
    
</body>
</html>