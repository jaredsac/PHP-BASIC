# PHP-BASIC-TAAK-10
## String operators - concatenation
## Uitleg
Je hebt geleerd hoe je tekst en variabelen met elkaar kan verbinden door de string operator `.` te gebruiken.

Naast het gebruik van `.` om tekst en variabelen aan elkaar te rijgen is er ook een andere manier.

>Voorbeeld:  
Stel je maakt een spel waar de speler steeds een item aan een lijst moet toevoegen dan kun je dit in code doen met:
```php
    $item = "<li>tas</li>";
    $item = $item . "<li>bal</li>";
```
>_Hij moet voor een lijst ook de oude waarde van de variabele onthouden daarom staat er twee keer $item_.  
>
>Een veel snellere (en makkelijkere) manier om dit te doen is:
```php
    $item = "<li>tas</li>";
    $item .= "<li>bal</li>";
```
>
## Leerdoelen
>1. [ ] Ik weet wat string operators zijn
>2. [ af] Ik kan een extra tekst waarde aan een string variabele toevoegen

## Opdracht
>1. Schrijf je code in `index.php`
>2. Maak een integer variabelen aan: _item_ en geef deze een eigen gekozen waarden _een string natuurlijk!_
>3. Voeg nog 2 items toe aan de variabele _item_ door `.=` te gebruiken en toon de uitkomst in een unordered list op het scherm met `echo`
>4. _Gebruik HTML in je `echo` statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat
Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser: 
>* item 1
>* item 2
>* item 3

>_Waar hierboven item 1, item 2, item 3 staat moet natuurlijk de waarde staan die jij aan de variabele hebt gegeven!_

## Bronnen
>[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)