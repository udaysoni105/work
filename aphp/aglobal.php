<?php
$myvar = 'Hello World!';

function myFunction() {
  echo $GLOBALS['myvar'];
}

myFunction();
?>