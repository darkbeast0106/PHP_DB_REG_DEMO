<?php 
class Regisztralt  
{
    public $felh_nev;
    public $email;
    public $pass;
    public $telj_nev;
    public $szuletes;
    public $irszam;
    public $varos;
    public $cim;
    public $reg_idopont;

    /*
        Nem lehet különböző paraméter számmal, de ugyan olyan névvel függvényt létrehozni.
    */
    public function __construct($felh_nev,$email,$pass,$telj_nev,$szuletes,$irszam,$varos,$cim,$reg_idopont = null) {
        $this->felh_nev = $felh_nev;
        $this->email = $email;
        $this->pass = $pass;
        $this->telj_nev = $telj_nev;
        $this->szuletes = $szuletes;
        $this->irszam = $irszam;
        $this->varos = $varos;
        $this->cim = $cim;
        $this->reg_idopont = $reg_idopont;
    }
}



?>