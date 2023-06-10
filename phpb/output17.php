<?php
$marks = array( 
    "mohammad" => array (
       "physics" => 35,
       "maths" => 30,	
       "chemistry" => 39
    ),
    
    "qadir" => array (
       "physics" => 30,
       "maths" => 32,
       "chemistry" => 29
    ),
    
    "zara" => array (
       "physics" => 31,
       "maths" => 22,
       "chemistry" => 39
    )
);

echo "Marks of Mohammad in Physics: " . $marks['mohammad']['physics'] . "<br>";
echo "Marks of Qadir in Maths: " . $marks['qadir']['maths'] . "<br>";
echo "Marks of Zara in Chemistry: " . $marks['zara']['chemistry'] . "<br>";
?>
