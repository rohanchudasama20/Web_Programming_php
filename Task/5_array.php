<?php
// Multidimensional array: Students and their scores
$students = [
    ["name" => "lucifer", "scores" => [666, 666, 666]],
    ["name" => "jesus", "scores" => [911, 911, 911]],
    ["name" => "odin", "scores" => [69, 69, 69]]
];

// Display the scores of each student
foreach ($students as $student) {
    echo $student['name'] . " scores: " . implode(", ", $student['scores']);
    echo "<br>";
}
?>
