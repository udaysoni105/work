<?php
$color = array('white', 'green', 'red');

// sort the array in reverse order
rsort($color);

// display each color on a new line
foreach ($color as $c) {
    echo "$c<br>";
}
?>
