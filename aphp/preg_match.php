<?php
$string = "The quick brown fox jumps over the lazy dog.";
$pattern = "/quick.*fox/i"; // match "quick" followed by any characters, then "fox" (case-insensitive)
if (preg_match($pattern, $string, $matches)) {
  echo "Match found!";
  print_r($matches);
} else {
  echo "No match found.";
}
?>
