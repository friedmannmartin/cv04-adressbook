<?php
    //Předvyplnění formuláře existující osoby
    if (isset($_GET['osoba'])){
        foreach ($lideBezZahlavi as $osoba) {
            if ($osoba == $_GET['osoba']) {
                $clovek = $osoba;
                break;
            }
        }
    } else {
        $clovek = new Osoba();
    }
?>
<form name="osoba" action="./index.php" method="post" onsubmit="return validace()">
    <h1>Adresář</h1>
    <label>Jméno:    <input type="text" name="jmeno"    value='<?=$clovek->jmeno?>'    required></label>
    <label>Příjmení: <input type="text" name="prijmeni" value='<?=$clovek->prijmeni?>' required></label>

    <fieldset>
        <legend>Pohlaví</legend>
        <input type="radio" name="pohlavi" value="" checked hidden>
        <label>Muž  <input type="radio" name="pohlavi" value="M" <?=($clovek->pohlavi == 'M'? 'checked':'')?>></label>
        <label>Žena <input type="radio" name="pohlavi" value="Ž" <?=($clovek->pohlavi == 'Ž'? 'checked':'')?>></label>
    </fieldset>

    <label>Ulice:   <input type="text"  name="ulice"   value='<?=$clovek->ulice?>'></label>
    <label>Obec:    <input type="text"  name="obec"    value='<?=$clovek->obec?>' required></label>
    <label>PSČ:     <input type="text"  name="psc"     value='<?=$clovek->psc?>'  required></label>
    <label>Telefon: <input type="tel"   name="telefon" value='<?=$clovek->telefon?>'></label>
    <label>E-mail:  <input type="email" name="email"   value='<?=$clovek->email?>'></label>
    <label>Pozice:  <input type="text"  name="pozice"  value='<?=$clovek->pozice?>'></label>

    <label>Nadřízený:
        <select name="nadrizeny">
            <option value=""></option>
            <?php
                foreach ($lideBezZahlavi as $id => $nadrizeny) {
                    echo '<option value="' . $nadrizeny . '"' . ($nadrizeny == $clovek->nadrizeny ? ' selected>':'>');
                    echo $nadrizeny;
                    echo "</option>\n";
                }
            ?>
        </select>
    </label>
    <input type="hidden" name="osoba" value="<?=(isset($_GET['osoba'])? $_GET['osoba']:'new')?>">
    <input type="submit" value="Uložit">
</form>
<script src="./validace.js"></script>
