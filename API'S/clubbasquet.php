<?php
// Para extender el código junto a este
require_once 'db.php';

// Heredaremos de la class 'db'
class Jugador extends db
{

    function __construct()
    {
        parent::__construct();
    }

    // Función para obtener informacion y enviar codificada
    public function get_Jugador($jugador)
    {
        // Consulta
        $sql = "SELECT * FROM club WHERE nombreJugador ='" . $jugador . "'";
        $resultado = $this->consulta($sql);

        if ($resultado != null) {
            $jugador = $resultado->fetch_assoc();
            // Para codifcar los datos para ser enviados
            $jugador_json = json_encode($jugador);
            return $jugador_json;
        } else {
            return null;
        }
    }

    // Función para actualizar el jugador
    // $jugador_json es la informacion codificada obtenida de la busqueda con la funcion anterior
    public function update_Jugador($jugador_json)
    {
        // Para decoficar y insertar en el array asociativos de datos
        $array = json_decode($jugador_json, true);
        // Consulta
        $sql = "UPDATE club SET nombreJugador = '" . $array['nombreJugador'] . "',
                                posicion = '" . $array['posicion'] . "',
                                numero ='" . $array['numero'] . "',
                                edad = '" . $array['edad'] . "' WHERE
                                id = '" . $array['id'] . "'";
        $resultado = $this->consulta($sql);
        return $resultado;
    }
}
