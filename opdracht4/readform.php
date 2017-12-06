<?php

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$leeftijd = $_POST['leeftijd'];
$woonplaats = $_POST['woonplaats'];
$hobby = $_POST['hobby'];
$email = $_POST['email'];

echo 'Je naam is ' . $voornaam . ' ' . $achternaam . ' en de E-mail die je gebruikt is ' . $email . ' en ' . $voornaam . ' is ' . $leeftijd . ' jaar oud. Je woont in ' . $woonplaats . ' en je hobby is ' . $hobby;



echo '<br />';
if ($leeftijd >= 30) {
    echo 'Ik moet zeggen je bent oud.';
} else {
    echo 'je bent nog best jong geniet nu het nog kan -.-';
}
echo '<br />';
echo '<br />';
echo $voornaam . '<br />';
switch ($voornaam) {
    case "Nick":
    echo 'Mooie naam';
    break;

    case 'nick':
    echo 'Je ben de hoofdletter vergeten';
    break;

    case 'Joey':
    echo 'My man! beste leraar ooit';
    break;

    case 'Frank';
        echo 'Deze man is goed in TF2';
        break;

    case 'joey';
    echo 'Je ben de hoofdletter vergeten maar nog steeds de beste leraar ooit #respect';
    break;

    default:
    echo 'dat is ook een mooie naam';
}
echo '<br />';
echo '<br />';
echo $achternaam . '<br />';
switch ($achternaam) {
    case "Hordijk";
        echo 'ja deze heb ik zelf ingevult';
        break;

    case 'hordijk';
        echo 'awhhh kom op man het is Hordijk niet hordijk >H<';
        break;

    case 'mitj';
        echo 'afkorting';
        break;

    case 'asd';
        echo 'Ik heb het goed gegokt! dat is er 1 voor het dagboek';
        break;

    case 'Vlaar';
        echo 'ik zag net een vrachtwagen met de naam Vlaar er op.';
        break;

    default:
        echo 'die kan ik zelf niet schrijven.. te moeilijk';
}
echo '<br />';
echo '<br />';
echo $leeftijd . '<br />';
switch ($leeftijd) {
    case 26;
        echo 'vroeger was ik nog jong';
        break;

    case 32;
        echo 'Best oud maar je kan er mee door';
        break;

    case 99;
        echo 'Jij bent gewoon bijna dood.';
        break;

    case 35;
        echo 'ik zal het alvast opgeven.';
        break;


    case 18;
        echo 'Je mag eindelijk drinken';
        break;
    default:
        echo 'Te oud of te jong ik heb geen idee wat je invulde';
}
echo '<br />';
echo '<br />';
echo $woonplaats . '<br />';
switch ($woonplaats) {
    case 'Hoorn';
        echo 'Daar woont Nick';
        break;

    case 'Zaandam';
        echo 'The hood';
        break;

    case 'Volendam';
        echo 'het kleine drop in nederland';
        break;

    case 'Haarlem';
        echo 'Daar ben ik geboren';
        break;

    case 'Amsterdam';
        echo 'Te druke stad';
        break;


    default:
        echo 'Dat is ook een leuke plek';
}
echo '<br />';
echo '<br />';
echo $hobby . '<br />';
switch ($hobby) {
    case 'Golf';
        echo 'Lekker rustig in je eentje';
        break;

    case 'Gamen';
        echo 'I love RPG';
        break;

    case 'Netflix';
        echo 'Leuke series kijken ... nog 1 episode';
        break;

    case 'Lezen';
        echo 'Lekker onspanned en geniet van je boek';
        break;


    case 'Zuipen';
        echo 'Daar doe ik niet aan';
        break;

    default:
        echo 'Wow dat is ook leuk om te doen. Dat ga ik ook proberen';
}