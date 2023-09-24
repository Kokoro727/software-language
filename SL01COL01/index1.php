<?php

//Developer: Fouad Taissate

/* 
* Define variabeles
* String 'hello world' 
* Boolean true/false
* integer 1 10
* Float 1,10
* Array ['Stephan', 'Arie', 'Wout']
* date 06/09/2023
*/

// Variable
// String
$name = 'Fouad';
$secondName = 'Taissate';
$job = 'operatie bij een supermarkt.';
$length = '180 cm';


echo $name . " is " . $length . " lang.<br>";
echo $name . " " . $secondName . " werkt als " . $job . "<br>";


// Boolean
$isMarried = true;
if ($isMarried === true) {
    echo ucfirst($name) . " " . $secondName . " is getrouwd? Ja<br>";
} else {
    echo ucfirst($name) . " " . $secondName . " is getrouwd? Nee<br>";
}


// Integer - geheel getal
$age = 19;

echo $name . " is hoe oud? " .
    $age < 50 ? ". Het eind is in de buurt." : ". Het eind is om de hoek.";
// Float - pi oppervlakte cirkel

$pi = 3.14;


$cirkeldiameter = 10;

$oppervlakte = $pi * $cirkeldiameter;

echo "<br> $oppervlakte";

echo "je stinkt";

$programmingLanguages = [
    "HTML",
    "CSS",
    "Javascript",
    "php",
    "C#",
    "Python",
    "Nodejs",
    "Vue",
    "React"
];
echo "<br> Aantal programmeertalen: " . count($programmingLanguages) . "<br>";

// date

echo "De datum is " . date("d/m/Y") . "<br>";

// einde