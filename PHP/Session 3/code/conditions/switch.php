<?php


$drink = "pepsi";

switch($drink) {

    case "coffe":
    case "pepsi":

        echo "I'm drinking pepsi or coffe <br>";
        break;

    case "water":

        echo "I'm drinking water <br>";
        break;

    case "mocha":

        echo "I'm drinking mocha <br>";
        break;

    default:
        echo "I don't know this drink";
    
}