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
            foreach (array_slice($lide, 1) as $radek) {
                echo '<tr>';
                foreach ($radek as $sloupec) {
                    echo "<td>$sloupec</td>";
                }
                echo "</tr>\n";
            }
        ?>
    </tbody>
</table>
