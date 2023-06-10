<?php
$filename = 'myfile.txt';

if (file_exists($filename)) {
    echo 'File exists!';
    return true;
} else {
    echo 'File does not exist.';
    return false;
}
?>
