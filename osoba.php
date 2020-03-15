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

    public function __toString() {
        return $this->jmeno . ' ' . $this->prijmeni;
    }
}
