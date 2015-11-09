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
use App\FileReader;

$calc = new Calculator();
echo "<pre>";
echo $calc->add(2,3);
echo PHP_EOL;
$geom = new Geometry();
echo "Square of circle " . $geom->squareCircle(5);
echo PHP_EOL;
echo "area Rectangle" . $geom->areaRectangle(2,3);
echo PHP_EOL;
print_r($matrix = $calc->addToArray([1,2,3,4,5],1));

$fileObj = new FileReader('README.md');
echo $fileObj->fileRead();
