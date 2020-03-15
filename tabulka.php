<table>
    <thead>
        <tr>
            <th><a href="./index.php?sort=jmeno">Jméno</a></th>
            <th><a href="./index.php?sort=prijmeni">Příjmení</a></th>
            <th><a href="./index.php?sort=pohlavi">Pohlaví</a></th>
            <th><a href="./index.php?sort=ulice">Ulice</a></th>
            <th><a href="./index.php?sort=obec">Obec</a></th>
            <th><a href="./index.php?sort=psc">PSČ</a></th>
            <th><a href="./index.php?sort=telefon">Telefon</a></th>
            <th><a href="./index.php?sort=email">E-mail</a></th>
            <th><a href="./index.php?sort=pozice">Pozice</a></th>
            <th><a href="./index.php?sort=nadrizeny">Nadřízený</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET['sort'])){
                usort($lide, function($a, $b){
                    $param = $_GET['sort'];
                    return strcmp($a->$param, $b->$param);
                });
            }

            foreach ($lide as $id => $radek) {
                echo '<tr>';
                foreach ($radek as $sloupec) {
                    echo "<td>$sloupec</td>";
                }
                echo "<td><a href='./index.php?id=$id'>⚙️</a></td>";
                echo "</tr>\n";
            }
        ?>
    </tbody>
</table>
