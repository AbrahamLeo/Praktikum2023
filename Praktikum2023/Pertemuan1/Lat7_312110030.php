<?php
    $brush_price = 5;
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><th>Quantity</th>";
    echo "<th>Price</th></th>";
    $batasan = 100;
    $counter = 10;
    while ($counter <= $batasan){
        echo "<tr><td>";
        echo $counter +=5;
        echo "</td><td>";
        echo $brush_price * $counter;
        echo "</td></tr>";
    }
    echo "</table>";
?>