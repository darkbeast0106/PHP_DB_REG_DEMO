<?php
require_once "Regisztralt.php";
class Adatbazis
{
    private $host    = "localhost";
    private $user    = "root";
    private $pass    = "";
    private $db_name = "web_14sl_elso";
    private $conn;

    /*
        php-ban magic method a konstruktor
    */
    public function __construct()
    {
        $this->kapcsolodas();
    }

    private function kapcsolodas()
    {
        // Másik lehetőség PDO használata
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        $this->conn->set_charset("utf8");
        if ($this->conn->connect_error) {
            die($this->conn->connect_error);
        } else{
            //echo "Sikeres kapcsolódás";
        }
    }
    /*
    php 7-től kezdve lehet megadni a bemenő paraméter típusát
    sok helyen még php 5.5 / 5.6 / 5.7 fut ahol erre nincs lehetőség
    public function regisztracio(Regisztralt $regisztralt)
    */
    public function regisztracio($regisztralt)
    {
        $sql = 
        "INSERT INTO `regisztraltak`
        (`felh_nev`, `email`, `pass`, `telj_nev`, `szuletes`, `irszam`, `varos`, `cim`) 
        VALUES (?,?,?,?,?,?,?,?)
        ";
        $stmt = $this->conn->prepare($sql);

        //https://en.wikipedia.org/wiki/Bcrypt
        $pass = password_hash($regisztralt->pass, PASSWORD_DEFAULT);

        $stmt->bind_param("sssssiss",
         $regisztralt->felh_nev,
         $regisztralt->email,
         $pass,
         $regisztralt->telj_nev,
         $regisztralt->szuletes,
         $regisztralt->irszam,
         $regisztralt->varos,
         $regisztralt->cim
        );
        $stmt->execute();
    }

    public function regisztraltak_lekerdezese()
    {
        $sql = "SELECT * FROM `regisztraltak`";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*
        Destruktor, akkor fut le amikor a php futása befejeződik és létrejön a végleges html dokumentum.
    */
    public function __destruct()
    {
        $this->conn->close();
        //echo "Destruct";
    }

}

