# PHP-BASIC-TAAK-08
## Variabelen - data en html combineren
## Uitleg
Je hebt geleerd hoe je met variabelen en tekst op het scherm kan tonen met de `echo` statement. 
>
Als tekst kun je willekeurige tekst gebruiken maat je kan ook html code gebruiken.

>Voorbeeld:  
Stel je wilt drie variabelen (_voornaam1_, _voornaam2_, _voornaam3_) in een onordered list op het scherm tonen dan kun je dit doen door html aan je code toe te voegen. Begin in html eerst met het toevoegen van de `<ul></ul>` tags
en zet tussen de tags de volgende php code:

```php
    echo "<li>$voornaam1</li><li>$voornaam2</li><li>$voornaam3</li>";
```
>_Je kan alle html gebruiken die je wilt in een `echo` statement, doe dit wel tussen quotes (")_
>
## Leerdoelen
>1. [af] Ik kan variabelen en html op het scherm tonen met de echo statement

## Opdracht
>1. Schrijf je code in `index.php`
>2. Maak een drie variabelen aan: _voornaam1_, _voornaam2_, _voornaam3_ en geef deze een eigen gekozen waarden _bijvoorbeeld: namen van studenten in je klas_
>3. Toon de uitkomst in een onordered list op het scherm met `echo`

## Eindresultaat
Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser: 
>* voornaam 1
>* voornaam 2
>* voornaam 3

>_Waar hierboven voonaam1, voonaam2, voonaam3 staat moet natuurlijk de waarde staan die jij aan de variabelen hebt gegeven!_

## Bronnen
>[Sitemasters - variabelen/echo](http://www.sitemasters.be/tutorials/1/1/3/PHP/Variabelen_in_PHP#wat)  
>[W3 Schools - variabelen](https://www.w3schools.com/php/php_variables.asp)  
>[W3 Schools - echo](https://www.w3schools.com/php/php_echo_print.asp)  