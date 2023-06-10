<?php
$string = "The quick brown fox jumps over the lazy dog.";
$pattern = "/\b\w{5}\b/"; // match any 5-letter word
if (preg_match_all($pattern, $string, $matches)) {
  echo "Matches found!";
  print_r($matches);
} else {
  echo "No matches found.";
}
?>
