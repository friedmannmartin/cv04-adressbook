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
                $_lide[] = new Osoba($radek[0],$radek[1],$radek[2],$radek[3],$radek[4],$radek[5],$radek[6],$radek[7],$radek[8],$radek[9]);
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
