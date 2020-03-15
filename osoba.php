<?php
class Osoba {
    public $jmeno;
    public $prijmeni;
    public $pohlavi;
    public $ulice;
    public $obec;
    public $psc;
    public $telefon;
    public $email;
    public $pozice;
    public $nadrizeny;

    public function __construct($jmeno,$prijmeni,$pohlavi,$ulice,$obec,$psc,$telefon,$email,$pozice,$nadrizeny){
        $this->jmeno     = $jmeno;
        $this->prijmeni  = $prijmeni;
        $this->pohlavi   = $pohlavi;
        $this->ulice     = $ulice;
        $this->obec      = $obec;
        $this->psc       = $psc;
        $this->telefon   = $telefon;
        $this->email     = $email;
        $this->pozice    = $pozice;
        $this->nadrizeny = $nadrizeny;
    }

    public function celeJmeno() {
        return $this->jmeno . ' ' . $this->prijmeni;
    }
}
