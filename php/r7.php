<?php
$text = "maripari";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == 'r') {
        $count++;
    }
}

echo "The number of 'r' characters in the string is: $count";
?>
