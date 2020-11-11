<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista escuela</title>
</head>
<body>
    <?php
    # Incluimos el archivo donde tenemos el objeto Escuela.
    include 'lib/escuela.php';
    # Crear el objeto de conexion;
    $escuela = new Escuela();
    
    # Actualiacion de bbdd
    $resultado = $escuela->actualizarAlumnos(2,'Juan','Maria',25);
    $resultado = $escuela->borrarAlumnos(1);
    # Recuperar y mostrar los alumnos de la base de datos.
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
        <a href="http://localhost:8081/VSCODE_git/PHP/POO/Sistema_MVC/lista_escuela/lib/alumno.php"><h2>Para ingresar datos pinche aqui!</h2><a/>
</body>
</html>