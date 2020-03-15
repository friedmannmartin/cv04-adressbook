<table>
    <thead>
        <tr>
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Pohlaví</th>
            <th>Ulice</th>
            <th>Obec</th>
            <th>PSČ</th>
            <th>Telefon</th>
            <th>E-mail</th>
            <th>Pozice</th>
            <th>Nadřízený</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($lide as $id => $radek) {
                if ($id == 0) continue;
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
