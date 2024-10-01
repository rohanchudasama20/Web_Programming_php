<?php
// Array from Exercise 2
$fruits = ["Banana", "Mango", "Orange", "Pineapple", "Strawberry", "Grapes"];

// Sort in ascending order
$fruits_asc = $fruits;
sort($fruits_asc);

// Sort in descending order
$fruits_desc = $fruits;
rsort($fruits_desc);

// Display the sorted arrays
echo "Ascending order:<br>";
print_r($fruits_asc);

echo "<br><br>Descending order:<br>";
print_r($fruits_desc);
?>
