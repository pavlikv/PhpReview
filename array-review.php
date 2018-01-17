<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/16/18
 * Time: 10:23 AM
 */

echo "<h2>Part 1</h2>";

$animals = array("panda", "alpaca", "boa");

function sortFunction($array) {
    sort($array);
    foreach ($array as $element) {
        echo "$element ";
    }
}

function addFunction($string, $animals){
    echo "<p>adding $string ...</p> ";
    $string = strtolower($string);
    if(!(in_array($string, $animals))) {
        array_push($animals, $string);
    }
    sortFunction($animals);
}
sortFunction($animals);

addFunction("goat", $animals);

echo "<h2>Part 2</h2>";