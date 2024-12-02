<?php
function reverseList($array) {
    return array_reverse($array);
}

$numbers = [1, 2, 3, 4, 5]; 
$reversedNumbers = reverseList($numbers);

echo "Original array: " . implode(", ", $numbers) . "<br>";
echo "Reversed array: " . implode(", ", $reversedNumbers);

function sumEvenNumbers($array) {
    $sum = 0;

    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
        }
    }

    return $sum;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$sumOfEvens = sumEvenNumbers($numbers);

echo "The sum of even numbers in the array is: " . $sumOfEvens;

function characterFrequency($string) {
    $frequency = array();

    foreach (str_split($string) as $char) {
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }

    return $frequency;
}


$text = "hello world";
$charFrequency = characterFrequency($text);

echo "Character frequencies in '$text': <br>";
foreach ($charFrequency as $char => $count) {
    echo "'$char' => $count <br>";
}


function printPyramid($height) {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = $i; $j < $height; $j++) {
            echo " "; 
        }

        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*"; 
        }

        echo "\n";
    }
}

$height = 5; 
printPyramid($height);
?>
