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
            while(($radek = fgetcsv($soubor,0,';')) !== FALSE){
                $_lide[] = new Osoba();
                end($_lide)->jmeno = $radek[0];
                end($_lide)->prijmeni = $radek[1];
                end($_lide)->pohlavi = $radek[2];
                end($_lide)->ulice = $radek[3];
                end($_lide)->obec = $radek[4];
                end($_lide)->psc = $radek[5];
                end($_lide)->telefon = $radek[6];
                end($_lide)->email = $radek[7];
                end($_lide)->pozice = $radek[8];
                end($_lide)->nadrizeny = $radek[9];
            }
            fclose($soubor);

            $lide['zahlavi'] = $_lide[0];
            for ($i=1; $i < count($_lide); $i++) {
                $lide[$i]=$_lide[$i];
            }
        ?>





        <?php
            if (isset($_GET['id'])){
                $clovek = $lide[$_GET['id']];
            } else {
                $clovek = new Osoba();
            }

            include 'formular.php';
            include 'tabulka.php';
        ?>
    </body>
</html>
