<?php
echo "<table border='1'>"; 

echo "<tr><th>&nbsp;</th>"; 
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>"; 
}
echo "</tr>";


for ($i = 1; $i <= 10; $i++) {
    echo "<tr><th>$i</th>"; 
    for ($j = 1; $j <= 10; $j++) {
        $product = $i * $j;
        echo "<td>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
