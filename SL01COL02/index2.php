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

echo "<br> $oppervlakte<br>";

$Fouad = [
    "Fouad",
    "Taissate",
    "s1203360@student.windesheim.nl"
];

$group = [
    $Fouad = [
        "Fouad",
        "Taissate",
        "s1203360@student.windesheim.nl"
    ],

    $Sam = [
        "Sam",
        "Maijer",
        "Sam.Maijer@example.com"
    ],
    $Niloyan = [
        "Niloyan",
        "Salluthurai",
        "Nilo@example.com"
    ],
    $Cedric = [
        "Cedric",
        "Heijlman",
        "Cedric@example.com"
    ]

];



$programmingLanguages = [
    ['programminglanguage' => 'HTML', 'stars' => 8,],
    ['programminglanguage' => 'CSS', 'stars' => 9,],
    [
        'programminglanguage' => 'Javascript',
        'stars' => 7,
    ],
    [
        'programminglanguage' => 'php',
        'stars' => 5,
    ],
    [
        'programminglanguage' => 'C#',
        'stars' => 4,
    ],
    [
        'programminglanguage' => 'Python',
        'stars' => 6,
    ],
    [
        'programminglanguage' => 'Nodejs',
        'stars' => 1,
    ],
    [
        'programminglanguage' => 'Vue',
        'stars' => 2,
    ],
    [
        'programminglanguage' => 'React',
        'stars' => 3
    ]

];


foreach ($programmingLanguages as $programmingLanguage) {
    echo " " . $programmingLanguage['programminglanguage'] . " " . $programmingLanguage['stars'];
    "<br>%nbsp;" . $programmingLanguage['stars'] . " <hr>";
};



// echo count($programmingLanguages);

// for ($i = 0; $i < count($programmingLanguages); $i++) {
//     echo "<br>" . $programmingLanguages[$i] . "<br>";
// }



echo "<br> Aantal programmeertalen: " . count($programmingLanguages) . "<br>";

// date

echo "De datum is " . date("d/m/Y") . "<br>";
