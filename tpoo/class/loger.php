<?php

class loger extends boursier{
private $numero_chambre;
public function __conctruct ($nom="", $prenom="", $mail="", $telephone="", $date_de_naissance=0,$type="",$numero_chambre=""){
    parent::__construct($nom, $prenom, $mail, $telephone, $date_de_naissance,$type);
    $this->numero_chambre=$numero_chambre;

}
}