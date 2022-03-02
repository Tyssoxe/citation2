<?php

class utilisateur {
    public $email;
    public $mdp;
    PUBLIC $role;
    function __construct($mdp,$email, $role) {
        $this->mdp =$mdp;
        $this->email = $email;
        $this->role = $role;
    }
    function getEmail()
    {
        return $this->mdp;
    }
    function setEmail($mdp){
    $this->mdp = $mdp;
    }
    function getMdp()
    {
        return $this->email;
    }
    function setMdp($email){
    $this->email = $email;
    }
}

?>