<?php
function is_lowercase($str) {
    return ctype_lower($str);
}$input1 = 'hello world';
$input2 = 'Hello World';

if (is_lowercase($input1)) {
    echo "$input1 is all lowercase.\n";
} else {
    echo "$input1 is not all lowercase.\n";
}

if (is_lowercase($input2)) {
    echo "$input2 is all lowercase.\n";
} else {
    echo "$input2 is not all lowercase.\n";
}
?>