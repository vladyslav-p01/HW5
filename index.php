<?php
require "vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.11.15
 * Time: 22:38
 */

use App\Calculator;
use App\Geometry;

$calc = new Calculator();
echo "<pre>";
echo $calc->add(2,3);
echo PHP_EOL;
$geom = new Geometry();
echo "Square of circle " . $geom->squareCircle(5);
echo PHP_EOL;
echo "area Rectangle" . $geom->areaRectangle(2,3);
echo PHP_EOL;
$matrix = $calc->addToMatrix(1,2,2);

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[0]); $j++) {
        echo $matrix[$i][$j] . " ";
    }
    //echo PHP_EOL;
}

