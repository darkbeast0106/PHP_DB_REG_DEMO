<h1>Eddig regisztráltak:</h1>      
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Felhasználónév</th>
        <th>E-mail</th>
        <th>Jelszó</th>
        <th>Teljes név</th>
        <th>Születési dátum (életkor)</th>
        <th>Lakcím</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        require_once "Adatbazis.php";
        $adatbazis = new Adatbazis();
        $regisztraltak = $adatbazis->regisztraltak_lekerdezese();
        /*$file = fopen("adatok.csv", "r");
        while ($sor = fgets($file)): 
            $sor = trim($sor);
            $adatok = explode(";", $sor);
            */
        foreach ($regisztraltak as $regisztralt):
        ?>
        <tr>
            <td><?php echo $regisztralt['id']; ?></td>
            <td><?php echo $regisztralt['felh_nev']; ?></td>
            <td><?php echo $regisztralt['email']; ?></td>
            <td><?php echo $regisztralt['pass']; ?></td>
            <td><?php echo $regisztralt['telj_nev']; ?></td>
                <?php 
                $szuletes = date_create($regisztralt['szuletes']);
                $most = date_create(date("Y-m-d"));
                $eletkor = date_diff($szuletes, $most);
                ?>
            <td><?php echo $regisztralt['szuletes'].' ('.$eletkor->format('%Y').')'; ?></td>
            <td><?php echo $regisztralt['irszam'].', '.$regisztralt['varos'].' '.$regisztralt['cim']; ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>