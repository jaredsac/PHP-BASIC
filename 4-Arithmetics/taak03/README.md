# PHP-BASIC-TAAK-03
## Increment Operators
## Uitleg
Je hebt geleerd hoe je met variabelen kan rekenen door het gebruik van Arithmic Operators (+ - * / %) en hoe je een waarde bij een variabele kan optellen door het gebruik van Assignment Operators (+= -= *= /= %=)

Bij het maken van een applicatie komt het vaak voor dat je een waarde van een variabele wilt vergroten of verkleinen met 1.

>Voorbeeld:  
Stel je maakt een spel waar de score steeds 1 hoger moet worden als de speler een punt scoort zou je dit kunnen doen met de volgende code:
```php
    $score = $score + 1;
```
>Of met:
```php
    $score += 1;
```
>Een veel snellere (en duidelijkere) manier om dit te doen is:
```php
    $score++;
```
>
Als je een variabele met 1 wilt:
* verhogen gebruik je `$variabele++` of `++$variabele`
* verlagen gebruik je `$variabele--` of `--$variabele`

>_zoals je hierboven ziet kan de ++ of de -- voor of na de variabele staan!_  
>Dit is het verschil:
```php
    $score = 10;
    echo $score++;
```
> Toont 10 op je scherm
```php
    $score = 10;
    echo ++$score;
```
> Toont 11 op je scherm
>
_Voor nu hoef je alleen te onthouden wat het verschil is als je de ++ of -- voor of na de variabele zet, later met meer uitleg zal het duidelijker worden!_

>
## Leerdoelen
>1. [ ] Ik weet wat increment operators zijn
>2. [AF] Ik kan de waarde van een variabele veranderen met een increment operator

## Opdracht
>1. Schrijf je code in `index.php`
>2. Maak een integer variabelen aan: _getal1_ en geef deze een eigen gekozen waarden _een getal natuurlijk!_
>3. Pas de waarde van de variabele _getal1_ aan door `++`, `--`  voor de variabele te gebruiken (dus ++$variabele;) en toon de uitkomst op het scherm met `echo`
>4. _Gebruik HTML in je `echo` statement om de uitkomst onder elkaar te tonen in plaats van naast elkaar_

## Eindresultaat
Als je de opdracht goed uitvoert wordt de volgende tekst getoond in je browser: 
>De uitkomst van ++  
>De uitkomst van --   


## Bronnen
>[W3 Schools - operators](https://www.w3schools.com/php/php_operators.asp)