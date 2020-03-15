<form action="/index.php" method="post">
    <label>Jméno:    <input type="text" name="jmeno"    value='<?=$clovek->jmeno?>'></label>
    <label>Příjmení: <input type="text" name="prijmeni" value='<?=$clovek->prijmeni?>'></label>

    <fieldset>
        <legend>Pohlaví</legend>
        <label>Muž  <input type="radio" name="pohlavi" value="M" <?=($clovek->pohlavi == 'M'? 'checked':'')?>></label>
        <label>Žena <input type="radio" name="pohlavi" value="Ž" <?=($clovek->pohlavi == 'Ž'? 'checked':'')?>></label>
    </fieldset>

    <label>Ulice:   <input type="text"  name="ulice"   value='<?=$clovek->ulice?>'></label>
    <label>Obec:    <input type="text"  name="obec"    value='<?=$clovek->obec?>'></label>
    <label>PSČ:     <input type="text"  name="psc"     value='<?=$clovek->psc?>'></label>
    <label>Telefon: <input type="tel"   name="telefon" value='<?=$clovek->telefon?>'></label>
    <label>E-mail:  <input type="email" name="email"   value='<?=$clovek->email?>'></label>
    <label>Pozice:  <input type="text"  name="pozice"  value='<?=$clovek->pozice?>'></label>

    <label>Nadřízený:
        <select name="nadrizeny">
            <option value=""></option>
            <?php
                foreach ($lide as $klic => $nadrizeny) {
                    if ($klic === 'zahlavi'){continue;}
                    echo '<option value="' . $nadrizeny . '"' . ($nadrizeny == $clovek->nadrizeny? ' selected>':'>');
                    echo $nadrizeny;
                    echo "</option>\n";
                }
            ?>
        </select>
    </label>

    <input type="submit" value="Uložit">
</form>
