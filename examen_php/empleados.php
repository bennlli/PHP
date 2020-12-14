<?php
include 'db.php';

class Departamento{
    var $num_emp;
    var $name_emp;
    var $pos_emp;
    var $boss_emp;
    var $date_start;
    var $bene;
    var $comi; 
    var $num_dep;

    function __construct(){
        $this->num_emp;
        $this->name_emp;
        $this->pos_emp;
        $this->boss_emp;
        $this->date_start;
        $this->bene;
        $this->comi; 
        $this->num_dep;
    }

    #           'GETTERS'
    public function getNum_emp(){
        return $this->num_emp;
    }
    public function getName_emp(){
        return $this->name_emp;
    }
    public function getPos_emp(){
        return $this->pos_emp;
    }
    public function getBoss_emp(){
        return $this->boss_emp;
    }
    public function getDate_start(){
        return $this->date_start;
    }
    public function getBene(){
        return $this->bene;
    }
    public function getComi(){
        return $this->comi;
    }
    public function getNum_dep(){
        return $this->num_dep;
    }

    #           'SETTERS'
    public function setNum_emp($num_emp){
        $this->num_emp = $num_emp;
        return $this;
    }
    public function setName_emp($name_emp){
        $this->name_emp = $name_emp;
        return $this;
    }
    public function setPos_emp($pos_emp){
        $this->pos_emp = $pos_emp;
        return $this;
    }
    public function setBoss_emp($boss_emp){
        $this->boss_emp = $boss_emp;
        return $this;
    }
    public function setDate_start($date_start){
        $this->date_start = $date_start;
        return $this;
    }
    public function setBene_emp($bene){
        $this->bene = $bene;
        return $this;
    }
    public function setComi($comi){
        $this->comi = $comi;
        return $this;
    }
    public function setName_dep($num_dep){
        $this->num_dep = $num_dep;
        return $this;
    }

}




?>