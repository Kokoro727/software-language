<?php

//Developer: Fouad Taissate


$Fouad = [
    "Fouad",
    "Taissate",
    "Fouad.Taissate@example.com"
];

$group = [
    $Fouad = [
        "Fouad",
        "Taissate",
        "Fouad.Taissate@example.com"
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

];


// Zorgt ervoor dat van elke array in de $group array een link komt
foreach ($group as $person) {
    echo '<a href="more.php?name=' . $person[0] . '">View ' . $person[0] . "'s info</a><br>";
};









// echo "<div>
//         <a href='./Fouad.php'>Fouad</a>
//     </div>
//     ";



// echo "<div>
//         <a href='./Niloyan.php'>Niloyan</a>
//     </div>
//     ";


// echo "<div>
//         <a href='./Sam.php'>Sam</a>
//     </div>
//     ";










/*
date_default_timezone_set(timezoneId: 'Europe/Amsterdam');



function dd($value)
{
    die(var_dump($value));
}



function changeColor()
{
    if (date('H') < 9) {


        echo "<style>
                body {
                    background-color: blue;
                }</style>";
    } else {
        echo "<style>
                body {
                    background-color: pink;
                }</style>";
    };
    echo "<div>Hello ADSD</div>";
}



changeColor();
$teams = ["coat", "psr", "keep", "rocketdev"];
$PLAYERS = ["stephan", "arie", "jan"];




function characterCounterType($value)
{
    echo $value . "<br>";
    echo strlen($value) . "<br>";
    echo gettype($value) . "<br>";
};


$person = date("D-M-Y");

characterCounterType($person);

function randomValue($teams)
{
    $random = rand(0, array_rand($teams));
    echo $teams[$random];
};

echo randomValue($teams);
*/
