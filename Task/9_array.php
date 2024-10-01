<?php
// Associative array
$countries = [
    "USA" => "Washington D.C.",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
    "France" => "Paris"
];

// Sort by keys (countries) in ascending order
ksort($countries);
echo "Sorted by country (keys) in ascending order:<br>";
foreach ($countries as $country => $capital) {
    echo "$country: $capital<br>";
}

echo "<br>";

// Sort by values (capitals) in descending order
arsort($countries);
echo "Sorted by capital (values) in descending order:<br>";
foreach ($countries as $country => $capital) {
    echo "$country: $capital<br>";
}
?>
