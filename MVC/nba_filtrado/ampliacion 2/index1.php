<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    include 'dbNBA2.php';
    $valor_opt = new dbNBA2();
    $tabla = $valor_opt->op_Equipo_loc();
    $tabla1 = $valor_opt->op_Equipo_vis();
    $tabla2 =$valor_opt->op_Equipo_temp();
    ?>
    <h1>Seleccion de equipos</h1>
    <form action="filtrado2.php" method="POST">
        <label for="equipo_loc">Equipo local</label>
            <select id="equipo_loc" name="equipo_loc">
                <?php
                foreach ($tabla as $fila){
                    echo '<option value="' . $fila['equipo_local'] . '">' . $fila['equipo_local'] . '</option>';
                }
                ?>

            </select><br>
    <form action="filtrado2.php" method="POST">
        <label for="equipo_vis">Equipo visitante</label>
            <select id="equipo_vis" name="equipo_vis">
                <?php
                foreach ($tabla1 as $fila){
                    echo '<option value="' . $fila['equipo_visitante'] . '">' . $fila['equipo_visitante'] . '</option>';
                }
                ?>
                </select><br>

    <form action="filtrado2.php" method="POST">
        <label for="temp">Temporada</label>
            <select id="temp" name="temp">
                <?php
                foreach ($tabla2 as $fila){
                    echo '<option value="' . $fila['temporada'] . '">' . $fila['temporada'] . '</option>';
                }
                ?>
            
            </select><br>
        <input type="submit" value="Filtrar"><br>
    </form>
    
</body>
</html>