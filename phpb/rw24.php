<?php
$file = fopen("example.txt", "r");
$fileContent = fread($file, filesize("example.txt"));
fclose($file);
echo "Contents of example.txt: " . $fileContent;


$file = fopen("example.txt", "w");
fwrite($file, "New content for example.txt");
fclose($file);

$file = fopen("example.txt", "r");
$fileContent = fread($file, filesize("example.txt"));
fclose($file);

echo "Updated contents of example.txt: " . $fileContent;
?>
