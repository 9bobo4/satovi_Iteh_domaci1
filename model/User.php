<?php


class User{


    private $id;
    private $ime;

    private $prezime;
    private $email;
    private $lozinka;



    public function __construct($id=null,$ime=null,$prezime=null,$email=null,$lozinka=null){
        $this->id=$id;
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->lozinka=$lozinka;
        $this->email=$email;

    }


    public static function ulogujSe($user,$conn){
        $upit = "select * from users where email='$user->email' and lozinka='$user->lozinka'";
        return $conn->query($upit);
    }

}







?>