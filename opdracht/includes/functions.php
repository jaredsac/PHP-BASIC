<?php

    $product = ["appels", "peren", "meloen", "bananen", "Druiven", "Lemoen", "mango", "citroen", "pruim", "perzik"];
    $prijs = [0.25, 0.30, 1.30, 2.55, 2.35, 1.30, 0.45, 0.30, 0.70, 0.50];

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{       
    global $product, $prijs;
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    //echo $productnummer;
    echo $product[$productnummer] . "\n" . $prijs[$productnummer];
    
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;

   
}

/*function getKorting()
{
    global $leeftijd;

    switch($leeftijd) {
        case 20:
        echo 20 . "\n" ."cent";
        break;
        case 19:
        echo 19 . "\n" ."cent";
        break;
        case 18:
        echo 18 . "\n" ."cent";
        break;
        case 17:
        echo 17 . "\n" ."cent";
        break;
        default:
        echo 1 . "\n" ."euro";
    }
}*/

function getTotaal() {
    
}
?>