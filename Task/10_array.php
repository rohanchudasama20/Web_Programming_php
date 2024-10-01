<?php
// Multidimensional associative array
$cities = [
    "New York" => [
        "population" => 8419600,
        "area" => 783.8,  // in square kilometers
        "country" => "USA"
    ],
    "Berlin" => [
        "population" => 3769000,
        "area" => 891.8,
        "country" => "Germany"
    ],
    "Tokyo" => [
        "population" => 13929286,
        "area" => 2194,
        "country" => "Japan"
    ]
];

// Display information for each city
foreach ($cities as $city => $info) {
    echo "City: $city<br>";
    echo "Population: " . $info['population'] . "<br>";
    echo "Area: " . $info['area'] . " km²<br>";
    echo "Country: " . $info['country'] . "<br><br>";
}
?>
