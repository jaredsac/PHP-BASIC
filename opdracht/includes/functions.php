<?php
    $discount=NUll;

    $fruits = array(
        "1"=> ['appels(3kg)', 'prijs'=> 2.00], "2"=> ['peren(1kg)', 'prijs'=> 2.50],
        "3"=> ['meloen', 'prijs'=> 1.30], "4"=> ['Bananen', 'prijs'=> 2.50],
        "5"=> ['Druiven ', 'prijs'=> 2.00], "6"=> ['lemoen(per stuk)', 'prijs'=> 0.50],
        "7"=> ['mango', 'prijs'=> 1.59], "8"=> ['citroen(per stuk)', 'prijs'=> 0.55],
        "9"=> ['pruimen', 'prijs'=> 0.70], "10"=> ['perzik', 'prijs'=> 1.00]
    );
    

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{       
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
    
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

function getKorting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
   switch($leeftijd) {
        case 20:
        $discount= 0.20;
        break;
        case 19:
        $discount= 0.19;
        break;
        case 18:
        $discount= 0.18;
        break;
        case 17:
        $discount= 0.17;
        break;
        case 16:
        $discount= 0.16;
        break;
        case 15:
        $discount= 1;
        break;
        case 14:
        $discount= 1;
        break;
        case 13:
        $discount= 1;
    }
}


function getTotaal() {
    global $fruits;
    global $discount;

    if (isset($_GET['productnummer']) && isset($_GET['aantal'])) {
        if(isset($fruits[$_GET['productnummer']])) {
            echo $fruits[$_GET['productnummer']]['prijs'] * $_GET['aantal'] - $discount ;
        }
    }
}
?>