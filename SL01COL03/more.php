<?php

require './index.php';

// de volgende regel kijkt of er een naam parameter is in de URL query string
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    // Zoek het persoon in de $group array
    $person = null;
    // maak een loop aan die dat door de $group array gaat en voor elke loop slaat hij gegevens op van dat persoon in de variabele $member
    foreach ($group as $member) {
        if ($member[0] == $name) {
            $person = $member;
            break;
        }
    }

    if ($person !== null) {
        echo '<h1>Information for ' . $person[0] . '</h1>';
        echo '<p>First Name: ' . $person[0] . '</p>';
        echo '<p>Last Name: ' . $person[1] . '</p>';
        echo '<p>Email: ' . $person[2] . '</p>';
    } else {
        echo 'Person not found.';
    }
} else {
    echo 'Invalid request.';
}
