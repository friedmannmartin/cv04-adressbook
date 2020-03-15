<?php
    require_once 'osoba.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $soubor = fopen("adresar.csv","r+");

            //Čtení osob ze souboru
            while(($radek = fgetcsv($soubor,0,';')) !== false){
                $lide[] = new Osoba();
                end($lide)->jmeno     = $radek[0];
                end($lide)->prijmeni  = $radek[1];
                end($lide)->pohlavi   = $radek[2];
                end($lide)->ulice     = $radek[3];
                end($lide)->obec      = $radek[4];
                end($lide)->psc       = $radek[5];
                end($lide)->telefon   = $radek[6];
                end($lide)->email     = $radek[7];
                end($lide)->pozice    = $radek[8];
                end($lide)->nadrizeny = $radek[9];
            }

            //Zápis osoby do souboru
            if (isset($_POST['id'])){
                if ($_POST['id'] === 'new'){
                    $lide[] = new Osoba();
                    $id = array_key_last($lide); //ID nově vytvořené osoby
                } else {
                    $id = $_POST['id'];          //ID upravované osoby
                }
                $lide[$id]->jmeno     = $_POST['jmeno'];
                $lide[$id]->prijmeni  = $_POST['prijmeni'];
                $lide[$id]->pohlavi   = $_POST['pohlavi'];
                $lide[$id]->ulice     = $_POST['ulice'];
                $lide[$id]->obec      = $_POST['obec'];
                $lide[$id]->psc       = $_POST['psc'];
                $lide[$id]->telefon   = $_POST['telefon'];
                $lide[$id]->email     = $_POST['email'];
                $lide[$id]->pozice    = $_POST['pozice'];
                $lide[$id]->nadrizeny = $_POST['nadrizeny'];
                foreach ($lide as $radek) {
                    fputcsv($soubor,$radek,';');
                }
            }

            fclose($soubor);

            include 'formular.php';
            include 'tabulka.php';
        ?>
    </body>
</html>
