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
# *********************************************************
# Hacemos una consulta
$resultado = $mysqli->query("SELECT * FROM alumnos");
# Usamos '$resultado->num_rows' para extraer el número de datos almacenados
echo 'Los resultado obtenido es de ' .$resultado->num_rows.' datos.<br>';
# Usamos un for para recorrer cada columna y que nos proporcione la informacion de su interior
    for ($i=0; $i <$resultado->num_rows ; $i++) { 
        # Usamos 'fetch_assoc()' para extraer el dato de cada posición como si fuese un 'array asociativo'
        $fila = $resultado->fetch_assoc();
        echo 'El nombre es '.$fila['nombre'].' '.$fila['apellidos']. ', con edad '.$fila['edad'].'<br>';
    }
?>