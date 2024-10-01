<?php
// Initial associative array (Exercise 6 array)
$countries = [
    "USA" => "Washington D.C.",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
];

// Add a new country-capital pair
$countries["France"] = "Paris";

// Update the capital of an existing country
$countries["USA"] = "New York";

// Display the updated array
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
