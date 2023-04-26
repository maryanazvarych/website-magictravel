<?php
    $i=0;
    while ($i < $num) {
        $rs->data_seek($i);
        $row = $rs->fetch_assoc();
        echo "<tr>";
        echo "<td class='viewAll'>".$row["id"]."</td>";
        echo "<td class='viewAll'>".$row["imie"]."</td>";
        echo "<td class='viewAll'>".$row["email"]."</td>";
        echo "<td class='viewAll'>".$row["mobile"]."</td>";
        echo "</tr>";
        $i++;
    }
?>