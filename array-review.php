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

$flavors = array("grasshopper"=>"The Grasshopper",
                    "maple"=>"Whiskey Maple Bacon",
                    "carrot"=>"Carrot Walnut",
                    "caramel"=>"Salted Caramel Cupcake",
                    "velvet"=>"Red Velvet",
                    "lemon"=>"Lemon Drop",
                    "tiramisu"=>"Tiramisu",
    );


?>

<?php
    foreach ($flavors as $flavor => $name) {
        echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"$flavor\"> $name<br>";
    }
?>