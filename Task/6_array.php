<?php
// Create an associative array with countries as keys and capitals as values
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington, D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Brazil" => "Brasília"
];

// Display the country-capital pairs
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
