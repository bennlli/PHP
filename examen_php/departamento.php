<?php

class Departamento{
    var $num_dep;
    var $name_dep;
    var $city_dep;

    function __construct(){
        $this->num_dep;
        $this->name_dep;
        $this->city_dep;
    }


    #           'GETTERS'
    public function getNum_dep(){
        return $this->num_dep;
    }

    public function getName_dep(){
        return $this->name_dep;
    }
    public function getCity_dep(){
        return $this->city_dep;
    }

    #           'SETTERS'
    public function setNum_dep($num_dep){
        $this->num_dep = $num_dep;
        return $this;
    }
    public function setName_dep($name_dep){
        $this->name_dep = $name_dep;
        return $this;
    }
    public function setCity_dep($city_dep){
        $this->city_dep = $city_dep;
        return $this;
    }


}
?>