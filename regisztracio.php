<form action="index.php?oldal=adatfeldolgozas" method="post">
    <div class="form-group">
        <label for="input_felh_nev" class="form-label mt-4">Felhasználónév</label>
        <input type="text" class="form-control" name="felh_nev" id="input_felh_nev" placeholder="Felhasználónév">
    </div>
    <div class="form-group">
        <label for="input_email" class="form-label mt-4">E-mail</label>
        <input type="email" class="form-control" name="email" id="input_email" placeholder="E-mail">
    </div>
    <div class="form-group">
        <label for="input_pass" class="form-label mt-4">Jelszó</label>
        <input type="password" class="form-control" id="input_pass" name="pass" placeholder="Jelszó">
    </div>
    <div class="form-group">
        <label for="input_telj_nev" class="form-label mt-4">Teljes név</label>
        <input type="text" class="form-control" name="telj_nev" id="input_telj_nev" placeholder="Teljes név">
    </div>
    <div class="form-group">
        <label for="input_szuletes" class="form-label mt-4">Születési dátum</label>
        <input type="date" class="form-control" name="szuletes" id="input_szuletes" placeholder="Születési dátum">
    </div>
    <h4>Lakcím</h4>
    <div class="form-group">
        <label for="input_irszam" class="form-label mt-4">Irányító szám</label>
        <input type="number" class="form-control" name="irszam" id="input_irszam" placeholder="Irányító szám" maxlength="4">
    </div>
    <div class="form-group">
        <label for="input_varos" class="form-label mt-4">Város</label>
        <input type="text" class="form-control" name="varos" id="input_varos" placeholder="Város">
    </div>
    <div class="form-group">
        <label for="input_cim" class="form-label mt-4">Cím</label>
        <input type="text" class="form-control" name="cim" id="input_cim" placeholder="Cím">
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="feltetelek" id="input_feltetelek">
            <label class="form-check-label" for="input_feltetelek">
                Elolvastam és elfogadom a felhasználói feltételeket.
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Regisztráció</button>
    <!--
    formon ha button van alapértelmezetten submit lesz
        type="button" -> sima gomb lesz
        type="reset" -> alapállapotba helyezi a formot
-->
</form>
