<table>
    <thead>
        <tr>
            <?php
                foreach ($lide['zahlavi'] as $sloupec) {
                    echo "<th>$sloupec</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach (array_slice($lide, 1) as $id => $radek) {
                echo '<tr>';
                foreach ($radek as $sloupec) {
                    echo "<td>$sloupec</td>";
                }
                $id++;
                echo "<td><a href='./index.php?id=$id'>⚙️</a></td>";
                echo "</tr>\n";
            }
        ?>
    </tbody>
</table>
