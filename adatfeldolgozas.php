<?php if (isset($_POST) && !empty($_POST) 
&& isset($_POST['feltetelek']) && $_POST['feltetelek'] == "on"): ?>
<?php 
/*
    include - require - include_once - require_once
*/
require_once "Regisztralt.php";
$regisztralt = new Regisztralt(
    $_POST['felh_nev'],
    $_POST['email'],
    $_POST['pass'],
    $_POST['telj_nev'],
    $_POST['szuletes'],
    $_POST['irszam'],
    $_POST['varos'],
    $_POST['cim']
);

require_once "Adatbazis.php";
$adatbazis = new Adatbazis();
$adatbazis->regisztracio($regisztralt);

/*
$file = fopen("adatok.csv", 'a');
//Fájl megnyításra írásra a -> hozzáfűz lásd: https://www.php.net/manual/en/function.fopen.php
$adatok = $_POST['felh_nev'].";".$_POST['email'].";".$_POST['pass'].";".$_POST['telj_nev'].";".$_POST['szuletes'].";".$_POST['irszam'].";".$_POST['varos'].";".$_POST['cim']. PHP_EOL;
fwrite($file, $adatok);
*/
?>
<h2>Sikeres regisztráció az alábbi adatokkal:</h2>
<ul>
    <li>Felhasználónév: <?php echo $_POST['felh_nev']; ?></li>
    <li>E-mail: <?php echo $_POST['email']; ?></li>
    <li>Jelszó: <?php 
    for ($i=0; $i < strlen($_POST['pass']); $i++) { 
        echo "*";
    }?></li>
    <li>Teljes név: <?php echo $_POST['telj_nev']; ?></li>
    <li>Születési dátum: <?php echo $_POST['szuletes']; ?> - (<?php 
    $szuletes = date_create($_POST['szuletes']);
    $most = date_create(date("Y-m-d"));
    $eletkor = date_diff($szuletes, $most);
    echo $eletkor->format("%Y");
    ?> év)</li>
    <li>Lakcím: <?php echo $_POST['irszam']. ", " . $_POST['varos'] . " " . $_POST['cim'] ?></li>
</ul>
<?php endif; ?>
