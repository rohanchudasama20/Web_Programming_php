<?php
// Function to concatenate two strings
function concatenateStrings($string1, $string2)
{
    return $string1 . $string2;
}

// Example usage
$string1 = "Rohan, ";
$string2 = "Chudasama";

$combinedString = concatenateStrings($string1, $string2);
echo "The combined string is: " . $combinedString;
