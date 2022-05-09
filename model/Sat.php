<?php


class Sat{

    private $id;
    private $model;
    private $brend;
    private $cena;
    private $materijalNarukvice;
    private $mehanizamVrsta;

    public function __construct($id=null,$model=null,$brend=null,$cena=null,$materijalNarukvice=null,$mehanizamVrsta=null){
        $this->id=$id;
        $this->model=$model;
        $this->brend=$brend;
        $this->cena=$cena;
        $this->mehanizamVrsta=$mehanizamVrsta;

    }

    public static function vratiSveSatove($conn){
        $upit = "select * from satovi s join mehanizamvrsta m on s.mehanizamVrsta=m.idMeh";
        return $conn->query($upit);
    }













}






?>